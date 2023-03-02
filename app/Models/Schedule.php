<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Schedule extends Model
{
    protected $fillable = [
        'subject_nrc',
        'begin_time',
        'end_time',
        'building',
        'type',
        'room',
        'credits',
        'is_monday',
        'is_tuesday',
        'is_wednesday',
        'is_thursday',
        'is_friday',
        'is_saturday',
        'is_sunday'
    ];


    protected function day(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {

                if ($attributes['is_monday'])
                    return 'Lunes';

                if ($attributes['is_tuesday'])
                    return 'Martes';

                if ($attributes['is_wednesday'])
                    return 'Miércoles';

                if ($attributes['is_thursday'])
                    return 'Jueves';

                if ($attributes['is_friday'])
                    return 'Viernes';

                if ($attributes['is_saturday'])
                    return 'Sábados';

                if ($attributes['is_sunday'])
                    return 'Domingos';

                return null;
            }
        );
    }

    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_nrc', 'nrc');
    }
}
