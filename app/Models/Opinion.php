<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opinion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'teacher_id', 'body', 'quarter', 'explaining_rate', 'class_again_rate', 'puntuality_rate', 'evaluation_rate', 'general_rate', 'user_id', 'ip_address'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
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

}
