<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Reply;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReportController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request)
{
    $input = $request->validate([
        'reason' => 'required|string',
        'type' => 'required|string|in:opinion,reply',
        '_id' => 'required|numeric|exists:'. (request()->input('type') == 'opinion' ? 'App\Models\Opinion' : 'App\Models\Reply') .',id'
    ]);

    $type_value = $input['type'];
    $id_value = $input['_id'];
    $existingReportOpinion = Report::where('user_id', auth()->user()->id)
    ->where('opinion_id', $input['_id'])->first();
    $existingReportReply = Report::where('user_id', auth()->user()->id)
    ->where('reply_id', $input['_id'])->first();

    // Verifica si el ID del usuario que hizo el comentario es igual al ID del usuario que está haciendo el reporte
    if ($type_value == 'opinion') {
        $opinion = Opinion::find($id_value);
        if ($opinion->user_id == auth()->user()->id) {
            return redirect()->back()->with('error_same_comment', 'No puedes reportar tu propio comentario.');
        }
    } else if ($type_value == 'reply') {
        $reply = Reply::find($id_value);
        if ($reply->user_id == auth()->user()->id) {
            return redirect()->back()->with('error_same_reply', 'No puedes reportar tu propia respuesta.');
        }
    }

    //Verificar si el usuario ya le hizo un reporte al otro usuario que ya reportó.
    if ($existingReportOpinion) {
        return redirect()->back()->with('error_already_sent', 'Ya has reportado este comentario.');
    } else if($existingReportReply){
        return redirect()->back()->with('error_already_sent', 'Ya has reportado este comentario.');
    }


    $report = new Report();
    $report->reason = $input['reason'];
    $report->user_id = auth()->user()->id;

    if ($type_value == 'opinion') {
        $report->opinion_id = $id_value ;
    } else if ($type_value == 'reply') {
        $report->reply_id = $id_value;
    }

    $report->save();

    return redirect()->back()->with('ok_report', 'Gracias por reportar, revisaremos tu reporte en breve.');
}
}
