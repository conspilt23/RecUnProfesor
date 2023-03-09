<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use App\Models\Notification;
use App\Models\Opinion;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(ReplyRequest $request)
    {
        $data = $request->validated();

        $ip_address = $_SERVER['REMOTE_ADDR'];

        //Evitar que el usuario opine más de 2 veces al día para evitar spam.
        $opinion_id = $data['opinion_id'];
        $user_id = Auth::user()->id;
        $today = date("Y-m-d");
        $replies_today = DB::table('replies')
                        ->where([
                            ['opinion_id', '=', $opinion_id],
                            ['user_id', '=', $user_id],
                            ['created_at', 'like', $today . '%'],
                        ])->count();

        if ($replies_today >= 2) {
            return redirect()->back()->with('reply_exceeded', 'Has excedido el límite de respuestas por día para esta opinión.');
        }
        //En caso de no tener 2 replies en la misma opinión, pues se crea el reply.
        $reply = new Reply();
        $reply->opinion_id = $data['opinion_id'];
        $reply->user_id = auth()->user()->id;
        $reply->body = $data['body'];
        $reply->ip_address = $ip_address;
        $reply->save();

        $notifier = Auth::id();
        $user_id_opinion = Opinion::find($opinion_id)->user_id;

        if($user_id_opinion != $notifier){
        $notification = new Notification();
        $notification->user_id = Opinion::find($opinion_id)->user_id;
        $notification->notifier_id = $notifier;
        $notification->type = 'reply';
        $notification->link = "/opiniones/" . str(str_replace('-', ' ', Opinion::find($opinion_id)->teacher->name))->slug();
        $notification->class_icon = 'fa-comment-dots';
        $notification->message = "El usuario '" . User::find($notifier)->username .  "' ha respondido a tu opinión sobre " . Opinion::find($opinion_id)->teacher->name;
        $notification->save();
        }
        return redirect()->back()->with('ok_reply', 'Respuesta publicada correctamente.');
    }
}
