<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'search_query' => 'required|string',
            'modality' => 'nullable|string',
            'schedule' => 'nullable|string'
        ]);

        $builder = Subject::with([
            'schedules:id,subject_nrc,begin_time,building,type',
            'teacher:id,name'
        ])->groupBy('teacher_id');

        $search_query = $request->input('search_query');
        $teacher = Teacher::where('name', 'like', "%{$search_query}%")->first();
        $builder_search = Subject::join('teachers', 'teachers.id', '=', 'subjects.teacher_id')
        ->with([
            'schedules:id,subject_nrc,begin_time,building,type',
            'teacher:id,name'
        ]);


        $hours = Cache::rememberForever('schedules', function () {
            return Schedule::orderBy('begin_time', 'asc')->pluck('begin_time')->unique();
        });

        
if ($teacher) {
    /*
     * Se busca profesor primero...
     */
    $builder = $builder_search
        ->where('teachers.name', 'like', "%{$search_query}%")
        ->groupBy('teacher_id');
} else if (is_numeric($search_query) && strlen($search_query) === 4) {
    /*
     * Si no se encontró ningún profesor,
     * buscamos dentro del campo de NRC
     */
    $builder = $builder_search
        ->where('nrc', $search_query)
        ->groupBy('teacher_id');
} else if (preg_match('#^[a-zA-Z]{3}[0-9]{3}$#', $search_query) && strlen($search_query) === 6){
        /*
     * Si no se encontró ningún profesor, ni NRC,
     * buscamos dentro del campo de Códigos de asignaturas
     */
    $builder = $builder_search
        ->where('course', 'like', "%{$search_query}%")
        ->groupBy('teacher_id');

} else {
    /*
     * Si no se encontró ningún profesor, ni NRC, ni Código de asignaturas, entonces
     * buscamos las asignaturas que correspondan
     */
    $builder = $builder_search
        ->where('subjects.name', 'like', "%{$search_query}%")
        ->groupBy('teacher_id');
}

        /* 
         * Aplicando filtros
         */
        $builder = $builder->whereHas('schedules', function (Builder $query) use ($request) {

            // Si existe la modalidad
            if ($request->filled('modality')) {
                match ($request->input('modality')) {
                    'Virtual' => $query->where('building', 'EDIF-00'),
                    'PRE' => $query->whereIn('type', ['PRE', 'TEO', 'PRA']),
                    default => $query->where('type', $request->input('modality'))
                };
            }

            // Si existe el horario
            if ($request->filled('schedule')) {
                $query->where('begin_time', $request->input('schedule'));
            }
        });
        if ($builder->count() > 0)
            return view('search.search_results', [
                'results' => $builder->paginate(10),
                'query' => $search_query,
                'hours' => $hours
            ]);


        return view('search.not_results', [
            'query' => $search_query,
            'hours' => $hours
        ]);
    }
}