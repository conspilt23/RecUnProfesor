<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PgaController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfesorSubjectController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\NotificationController;

use Illuminate\Support\Facades\Route;

Route::view('/prueba', 'prueba');
Route::view('/', 'inicio')->name('inicio');
Route::view('/calendario-academico-unapec', 'calendario')->name('calendario');
Route::view('/carreras-de-unapec', 'carreras')->name('carreras');
Route::view('/preguntas-frecuentes-de-unapec', 'faq')->name('faq');
Route::view('/consejos-estudiantes-de-unapec', 'consejos')->name('consejos');
Route::view('/terminos', 'terminos')->name('terminos');
Route::view('/privacidad', 'privacidad')->name('privacidad');
Route::view('/cookies', 'cookies')->name('cookies');

Route::post('/registro',[RegisterController::class, 'register']);
Route::post('/login',[LoginController::class, 'login'])->where('any', '.*');
Route::post('/logout',[LogoutController::class, 'logout'] );
Route::post('/forget-password', [ForgotPasswordController::class, 'postEmail'])->where('any', '.*');
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword']);
Route::post('/calificar-profesor/store', [OpinionController::class, 'store'])->name('calificar.store');
Route::post('/reply', [ReplyController::class, 'store']);
Route::post('/report', [ReportController::class, 'store'])->name('report');
Route::post('/admin/report/delete-comment', [AdminController::class, 'deleteComment'])->name('comment.delete');
Route::post('/admin/report/destroy', [AdminController::class, 'destroy'])->name('destroy');
Route::post('/admin/report/user-reporter-ban', [AdminController::class, 'banReporterUser'])->name('reporter-ban');
Route::post('/admin/report/user-reported-ban', [AdminController::class, 'banReportedUser'])->name('reported-ban');

Route::get('/evaluar-profesor', [OpinionController::class, 'create'])->name('calificar');
Route::get('/registro', [RegisterController::class, 'create'])->name('registro');
Route::get('/calcular-indice-academico', [PgaController::class, 'create'])->name('indice');
Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::get('/result', [SearchController::class, 'search'])->name('search');
Route::get('/secciones/{name}', [ProfesorSubjectController::class, 'showSubjects']);
Route::get('/opiniones/{name}', [OpinionController::class, 'show'])->name('professor.opinion');
Route::get('/admin/reportes', [AdminController::class, 'reports'])->name('reports');


//Ajax routes
Route::post('/pensum', [PgaController::class, 'show']);
Route::post('/the-current-teacher', [OpinionController::class, 'getCurrentTeacher'])->name('the-current-teacher');
Route::post('/reactions/like', [ReactionController::class, 'like'])->name('like');
Route::post('/reactions/dislike', [ReactionController::class, 'dislike'])->name('dislike');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::get('/recent-opinions', [OpinionController::class, 'getRecentOpinions']);
Route::get('/opinions/{opinionId}/replies', [OpinionController::class, 'getReplies']);
Route::patch('/notifications/{notification}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.mark-as-read');
Route::patch('/notifications/mark-all-as-read', [NotificationController::class, 'markAllAsRead']);




Route::fallback(function(){
    return view('errors.404');
});

Route::any('{catchall}', function () {
    abort(404);
})->where('catchall', '.*');

//Route::get('/{any}', function(){
//    return view('inicio');
//})->where('any', '.*');

//videos de referencia para spa https://www.youtube.com/watch?v=gCpPuIYMvs8&t=148s&ab_channel=CodeFisher ;; https://www.youtube.com/watch?v=Zc3Jtz94DMg&t=532s&ab_channel=Inform%C3%A1ticaDP ;; // https://www.youtube.com/watch?v=BB-mUZPzTnI&ab_channel=DevTeam504
//recuerda la copia de seguridad antes de cualquier cosa.