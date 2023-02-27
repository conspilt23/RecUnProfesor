<?php

namespace App\Models;

use App\Models\Scopes\HideUnavailableTeacherScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
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
        'subject_id',
        'term',
        'term_desc',
        'nrc',
        'campus',
        'name',
        'course',
        'teacher_id'
    ];

    public function getFormattedTermAttribute()
{
    $term = $this->term;
    $year = substr($term, 0, 4);
    $quarter = substr($term, 4);
    $quarterText = '';

    switch ($quarter) {
        case 10:
            $quarterText = 'Enero - Abril';
            break;
        case 20:
            $quarterText = 'Mayo - Agosto';
            break;
        case 30:
            $quarterText = 'Septiembre - Diciembre';
            break;
    }

    return "$quarterText $year";
}


    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class, 'subject_nrc', 'nrc');
    }
}
