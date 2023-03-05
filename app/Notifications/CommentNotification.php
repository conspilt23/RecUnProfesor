<?php

namespace App\Notifications;

use App\Models\Reaction;
use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CommentNotification extends Notification
{
    use Queueable;

    public $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
{
    if ($this->action instanceof Reaction) {
        return [ 
            'user_id' => $this->action->opinion->user_id,
            'notifier_id' =>  Auth::id(),
            'type' =>  'like',
            'link' =>  "/opiniones/" . str(str_replace('-', ' ', $this->action->opinion->teacher->name))->slug(),
            'class_icon' =>  'fa-heart',
            'message' => "El usuario '{$this->action->user->username}' le ha dado like a tu opinión sobre {$this->action->opinion->teacher->name}.",
        ];
    }
    else if ($this->action instanceof Reply) {
        Log::debug('Notificación:', [
            'user_id' => $this->action->opinion->user_id,
            'notifier_id' =>  Auth::id(),
            'type' =>  'reply',
            'link' =>  "/opiniones/" . str(str_replace('-', ' ', $this->action->opinion->teacher->name))->slug(),
            'class_icon' =>  'fa-comment-dots',
            'message' => "El usuario '{$this->action->user->username}' ha respondido tu opinión sobre {$this->action->opinion->teacher->name}.",
        ]);
        
        

        return [
            'user_id' => $this->action->opinion->user_id,
            'notifier_id' =>  Auth::id(),
            'type' =>  'reply',
            'link' =>  "/opiniones/" . str(str_replace('-', ' ', $this->action->opinion->teacher->name))->slug(),
            'class_icon' =>  'fa-comment-dots',
            'message' => "El usuario '{$this->action->user->username}' ha respondido tu opinión sobre {$this->action->opinion->teacher->name}.",
        ];
    }
}


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}