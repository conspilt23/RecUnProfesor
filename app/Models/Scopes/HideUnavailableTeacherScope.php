<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class HideUnavailableTeacherScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    
    public function apply(Builder $builder, Model $model)
    {
        $model = $model->getTable();

        if ($model === 'teachers')
            $builder->where('id', '>', 1);

        elseif ($model === 'subjects')
            $builder->where('teacher_id', '>', 1);
    }
}
