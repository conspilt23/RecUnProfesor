<?php

namespace App\Models;

use App\Models\Scopes\HideUnavailableTeacherScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Teacher extends Model
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new HideUnavailableTeacherScope);
    }


    protected $fillable = [
        'name'
    ];

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function opinions(): HasMany
    {
        return $this->hasMany(Opinion::class);
    }
}
