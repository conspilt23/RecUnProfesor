<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class NotificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(auth()->user()->id);
        $notifications = $user->notifications()->get();
        return response()->json($notifications);
    }

    public function markAsRead(Notification $notification)
    {
    $user = auth()->user();
    $notifications = $user->notifications;
    $notification = $notifications->find($notification->id);
    $notification->delete();
    return response()->json($notification);
}

public function markAllAsRead()
{
    $user = auth()->user();
    $notifications = $user->notifications;
    foreach ($notifications as $notification) {
        $notification->delete();
    }
    return response()->json($notifications);
}

}