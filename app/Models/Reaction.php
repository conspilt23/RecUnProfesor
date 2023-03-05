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
}