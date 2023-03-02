<?php

namespace App\Models;

use App\Notifications\CommentNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'user_id', 'notifier_id', 'type', 'link', 'class_icon', 'message'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notifier_user(): BelongsTo
{
    return $this->belongsTo(User::class, 'notifier_id');
}

    public function reaction(): BelongsTo
    {
        return $this->belongsTo(Reaction::class);
    }

    public function reply(): BelongsTo
    {
        return $this->belongsTo(Reply::class);
    }
}