<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Opinion;
use App\Models\Quarter;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Laravolt\Avatar\Avatar;

class OpinionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['store', 'create', 'show', 'getRecentOpinions', 'getReplies']
        ]);
    }

    public function getCurrentTeacher(Request $request)
    {
        $search_teacher = $request->input('search_teacher');
        $teachers = Teacher::where('name', 'like', "%{$search_teacher}%")->take(10)->get();
        return response()->json($teachers);
    }

    public function create()
    {
        if(Auth::check()){
            $quarters = Quarter::all();

            return view('calificar', ['quarters' => $quarters]);
        } else {
            $quarters = null;
            return view('calificar', ['quarters' => $quarters]);
        }
    }

    

    public function store(CommentRequest $request)
    {

        $data = $request->validated();

        $teacher = Teacher::whereName($request->teacher_id)->first();
        if(!$teacher) {
            return back()->withErrors(['teacher_id' => 'El profesor seleccionado no existe']);
        }
        $teacher_id = $teacher->id;
 

        

        // Verificar que el usuario no quiera hacer spam
        $hasOpinedToday = Opinion::whereUserId(auth()->user()->id)
            ->whereTeacherId($teacher_id)
            ->whereDate('created_at', Carbon::today()->startOfDay())
            ->exists();

        if ($hasOpinedToday) {
            return back()->withErrors(['teacher' => 'Ya has opinado acerca de este profesor hoy.']);
        }

        $ip_address = $_SERVER['REMOTE_ADDR'];

        // De lo contrario, guardar la opinion
        $teacherName = Teacher::find($teacher_id)->name;
        Opinion::create([
            'user_id' => auth()->user()->id,
            'teacher_id' => $teacher_id,
            'body' => trim($data['body']),
            'quarter' => $data['quarter'],
            'explaining_rate' => $data['explaining_rate'],
            'class_again_rate' => $data['class_again_rate'],
            'puntuality_rate' => $data['puntuality_rate'],
            'evaluation_rate' => $data['evaluation_rate'],
            'general_rate' => $data['general_rate'],
            'ip_address' => $ip_address
        ]);

        // Retornar a la vista
        return redirect()->route('professor.opinion', str($teacherName)->slug())->with('ok_comment', 'comentario exitoso');
    }

    public function show($name)
    {
        // Reemplaza los guiones por espacios
        $nameWithSpaces = str_replace('-', ' ', $name);
        // Busca el profesor por su nombre
        $professor = Teacher::whereName($nameWithSpaces)->firstOrFail();
        // Extraer el primer nombre del profesor
        $words = explode(' ', $professor->name);
        $first_word = $words[0];
        $subjects = $professor->subjects;
        $sections = Subject::where('teacher_id', $professor->id)->get();
        $opinions = Opinion::whereTeacherId($professor->id)->withCount('positiveReactions', 'negativeReactions', 'replies')->latest()->paginate(10);



        $explaining_rate = round($opinions->avg('explaining_rate'));
        $class_again_rate = round($opinions->avg('class_again_rate'));
        $puntuality_rate = round($opinions->avg('puntuality_rate'));
        $evaluation_rate = round($opinions->avg('evaluation_rate'));
        $general_rate = round($opinions->avg('general_rate'));
        $explaining_color = $this->getRateColor($explaining_rate);
        $class_again_color = $this->getRateColor($class_again_rate);
        $puntuality_color = $this->getRateColor($puntuality_rate);
        $evaluation_color = $this->getRateColor($evaluation_rate);
        $general_color = $this->getRateColor($general_rate);

        $general_rate_avg = $this->getGeneralRate($explaining_rate, $class_again_rate, $puntuality_rate, $evaluation_rate, $general_rate);
        return view('opinion.teachers_opinions', compact('subjects', 'name', 'nameWithSpaces', 'first_word', 'professor', 'sections', 'opinions', 'explaining_rate', 'class_again_rate', 'puntuality_rate', 'evaluation_rate', 'general_rate', 'explaining_color', 'puntuality_color', 'evaluation_color', 'class_again_color', 'general_color', 'general_rate_avg'));
        
    }

    public function getRecentOpinions()
    {
        $recent_opinions = Opinion::with('teacher')->orderBy('created_at', 'desc')->limit(5)->get();
    
        $html = '';
        foreach ($recent_opinions as $opinion) {
          $html .= '<a class="md-ripples ripples-bg" tabindex="0" role="button" aria-disabled="false" href="'.url('/opiniones/'. str(str_replace('-', ' ', $opinion->teacher->name))->slug()) .'">';
          $html .= '<div class="sub_container">';
          $config = include base_path('vendor/laravolt/avatar/config/config.php');
          $avatar = new Avatar($config);
          $html .= '<div class="avatar-user">'. $avatar->create($opinion->teacher->name)->setDimension(45)->setFontSize(22)->toSvg().'</div>';
          $html .= '<div class="info-container">';
          $html .= '<span class="teacher_name">'.$opinion->teacher->name.'</span>';
          $html .= '<span class="time_ago">'.$opinion->created_at->diffForHumans().'</span>';
          $html .= '</div>';
          $html .= '</div>';
          $html .= '</a>';
        }
    
        if (!$html) {
          $html = '<p style="text-align:center; padding: 20px;" class="colr">Lo sentimos, actualmente no hay opiniones.</p>';
        }
    
        return response()->json(['html' => $html]);
    }

    function getReplies($opinionId) {
        $opinion = Opinion::find($opinionId);
      
        $html = '';
        if ($opinion->replies->count() > 0) {
          $replies = $opinion->replies()
            ->withCount('positiveReactions', 'negativeReactions')
            ->get();
          foreach($replies as $reply) {
            $config = include base_path('vendor/laravolt/avatar/config/config.php');
          $avatar = new Avatar($config);

          $html .= '<div class="comment__container opened" dataset="'.$opinion->id.'" id="'.$opinion->id.'_reply_'.$opinion->id.'" data-answer="'.$opinion->id.'" data-type="reply" data-commentid="'.$reply->id.'">
          <div class="comment__card">
              <div class="comment__user">
                  <div class="auth_name replg">
                  <span>'.$avatar->create($reply->user->username)->setDimension(40)->setFontSize(20)->toSvg().'</span>
                  <h3 class="comment__title">'.$reply->user->username.'</h3>
              </div>
              <div class="date_ago">
                  <p class="comment__ago">'.$reply->created_at->diffForHumans().'</p>
              </div>
              </div>
              <p class="body-text">
                '.$reply->body.'
              </p>
              <div class="settings_comment">
              '.(Auth::check() ? '<div class="report__flag md-ripples ripples-bg"><i class="fa-solid fa-flag"></i> Reportar</div>' : '') .'
              <div class="comment__card-footer">
              '.(Auth::check() ? '<div data-type="reply" data-commentid="'.$reply->id.'" class="md-ripples ripples-bg like-button"><i class="fa-solid fa-thumbs-up"></i><span class="like-count">'.$reply->positive_reactions_count.'</span></div><div data-type="reply" data-commentid="'.$reply->id.'" class="md-ripples ripples-bg dislike-button"><i class="fa-solid fa-thumbs-down"></i><span class="dislike-count">'.$reply->negative_reactions_count.'</span></div>' : '<div class="md-ripples ripples-bg"><i class="fa-solid fa-thumbs-up"></i>'.$reply->positive_reactions_count.'</div><div class="md-ripples ripples-bg"><i class="fa-solid fa-thumbs-down"></i>'.$reply->negative_reactions_count.'</div>') .'
              </div>
            </div>
        </div>
      </div>';

 }
 } else {
    $html .= '<div class="comment__container opened" dataset="'.$opinion->id.'" id="'.$opinion->id.'_reply_'.$opinion->id.'" data-answer="'.$opinion->id.'">
    Ninguna respuesta aún...
  </div>';
 }
return response()->json(['html' => $html]);
}

    private function getRateColor($rate)
{
    if ($rate >= 0 && $rate <= 41) {
        return '#fc1004;';
    } elseif ($rate > 41 && $rate <= 71) {
        return '#f8fc04;';
    } elseif ($rate > 71 && $rate <= 100) {
        return '#0af92a;';
    }
}

private function getGeneralRate($explaining_rate, $class_again_rate, $puntuality_rate, $evaluation_rate, $general_rate)
{
    $general_rate_avg = ($explaining_rate + $class_again_rate + $puntuality_rate + $evaluation_rate + $general_rate) / 5;
    return round($general_rate_avg);
}
}
