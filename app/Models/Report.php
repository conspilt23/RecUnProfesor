<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'opinion_id', 'reply_id', 'user_id', 'reason', 'type'
    ];

    public function opinion(): BelongsTo
    {
        return $this->belongsTo(Opinion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function replies(): BelongsTo
    {
        return $this->belongsTo(Reply::class, 'reply_id', 'id');
    }

}
