<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Notifications\CommentNotification;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Reply extends Model
{

    protected $fillable = [
        'opinion_id', 'user_id', 'body', 'ip_address'];

    Use SoftDeletes;
    
    public function opinion(): BelongsTo
    {
        return $this->belongsTo(Opinion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function report(): HasMany
    {
        return $this->hasMany(Report::class);
    }
    
    public function reactions(): HasMany
    {
        return $this->hasMany(Reaction::class);
    }

    public function positiveReactions()
    {
        return $this->reactions()->whereLike(1);
    }

    public function negativeReactions()
    {
        return $this->reactions()->whereDislike(1);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($reply) {
            $reply->notifyOpinionUser();
        });
    }
    
    public function notifyOpinionUser()
    {
        Schema::disableForeignKeyConstraints();
        $opinionUser = $this->opinion->user;
    
        if ($opinionUser->id != $this->user_id) {
                $opinionUser->notify(new CommentNotification($this));
        }
        Schema::enableForeignKeyConstraints();
    }

   
}
