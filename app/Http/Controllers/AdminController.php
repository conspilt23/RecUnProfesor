<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Reply;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->only(['banReportedUser', 'banReporterUser', 'deleteComment', 'destroy', 'reports']);
    }



public function banReportedUser(Request $request)
{
    $input = $request->validate([
        'report_id' => 'required|numeric|exists:App\Models\Report,id',

    ]);

    $report = Report::findOrFail($input['report_id']);

    if ($report->opinion_id != null) {
        $opinion = Opinion::findOrFail($report->opinion_id);
        $userToBan = $opinion->user_id;
    } else if ($report->reply_id != null) {
        $reply = Reply::findOrFail($report->reply_id);
        $userToBan = $reply->user_id;
    } else {
        return redirect()->back()->with('error_not_found_to_ban', 'No se encontró la publicación asociada al reporte.');
    }

    $user = User::findOrFail($userToBan);

    if ($user->role == 'admin') {
        return redirect()->back()->with('error_no_admin', 'No puedes vetar a un usuario administrador o a ti mismo.');
    } else if ($user->status == 'banned'){
        return redirect()->back()->with('error_banned_aggain', 'No puedes vetar a un usuario que ya fue vetado.');
    }

 
    if ($user->opinions()->exists()) {
        $user->opinions()->delete();
    }
    
    if ($user->replies()->exists()) {
        $user->replies()->delete();
    }
    

    $this->ban($user);

    $report->delete();

    return redirect()->back()->with('ok_banned', 'El usuario ha sido baneado correctamente.');
}

public function banReporterUser(Request $request){
    $input = $request->validate([
        'user_id' => 'required|numeric|exists:App\Models\User,id',
        'report_id' => 'required|numeric|exists:App\Models\Report,id'
    ]);

    $report = Report::findOrFail($input['report_id']);
    $userToBan = User::findOrFail($input['user_id']);
    if ($userToBan->role == 'admin') {
        return redirect()->back()->with('error_no_admin', 'No puedes vetar a un usuario administrador o a ti mismo.');
    } else if ($userToBan->status == 'banned'){
        return redirect()->back()->with('error_banned_aggain', 'No puedes vetar a un usuario que ya fue vetado.');
    }

    if ($userToBan->opinions()->exists()) {
        $userToBan->opinions()->delete();
    }
    
    if ($userToBan->replies()->exists()) {
        $userToBan->replies()->delete();
    }

    $this->ban($userToBan);
    $report->delete();   

    return redirect()->back()->with('ok_banned', 'El usuario ha sido baneado correctamente.');
}


public function deleteComment(Request $request)
{
    $input = $request->validate([
        'type' => 'required|string|in:opinion,reply',
        '_id' => 'required|numeric|exists:'. (request()->input('type') == 'opinion' ? 'App\Models\Opinion' : 'App\Models\Reply') .',id'
    ]);

    $type_value = $input['type'];
    $id_value = $input['_id'];

    // Verifica si el usuario tiene permiso para eliminar la opinión o respuesta
    if (!auth()->user()->role === 'admin') {
        return redirect()->back()->with('error_no_permission', 'No tienes permiso para eliminar este comentario o respuesta.');
    }

    if ($type_value == 'opinion') {
        $opinion = Opinion::find($id_value);
        $opinion->delete();
        Report::where('opinion_id', $id_value)->delete();
    } else if ($type_value == 'reply') {
        $reply = Reply::find($id_value);
        $reply->delete();
        Report::where('reply_id', $id_value)->delete();
    }
    

    return redirect()->back()->with('ok_deleted', 'El comentario o respuesta ha sido eliminado.');
}

public function destroy(Request $request)
{
        $input = $request->validate([
        'report_id' => 'required|numeric|exists:App\Models\Report,id'
    ]);

    $report = $input['report_id'];
    $reportToDelete = Report::findOrFail($report);



    $reportToDelete->delete();
        return redirect()->back()->with('success_delete_report', 'El reporte ha sido eliminado correctamente.');
}


private function ban($user)
{
    $user->status = 'banned';
    $user->save();
}

public function reports(){
    $reports = Report::latest()->paginate(10);

    return view('admin.reportes', compact('reports'));
}

}
