<?php

namespace App\Models;
use App\Notifications\CommentNotification;
use Illuminate\Notifications\Notifiable;
use App\Notifications\LikeNotification;
use App\Notifications\ReplyNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reaction extends Model
{
 
    protected $fillable = [
        'user_id', 'opinion_id', 'reply_id', 'like', 'dislike'
    ];

    public function opinion(): BelongsTo
    {
        return $this->belongsTo(Opinion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reply(): BelongsTo
    {
        return $this->belongsTo(Reply::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

 protected static function boot()
    {
        parent::boot();

        static::created(function ($reaction) {
            $reaction->notifyUsers();
        });
    }

public function notifyUsers()
{
    if($this->like){
        if($this->opinion){
            $user = $this->opinion->user;
            if(!$user->notifications()->whereType('like')->where('user_id', $this->user_id )->where('notifier_id',auth()->user()->id)->whereLink($this->link)->first() && $user->id != $this->user_id) {
                $user->notify(new CommentNotification($this));
            } else{
                return;
            }
        }
    } elseif($this->dislike){
        return;
    }
}
}