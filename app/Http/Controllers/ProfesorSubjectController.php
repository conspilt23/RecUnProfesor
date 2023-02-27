<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Teacher;

class ProfesorSubjectController extends Controller
{
    public function showSubjects($name)
    {
        $nameWithSpaces = str_replace('-', ' ', $name);

        $professor = Teacher::whereName($nameWithSpaces)
            ->with('subjects')
            ->firstOrFail();

        // Extraer el primer nombre del profesor
        $words = explode(' ', $professor->name);
        $first_word = $words[0];

            $sections = $professor->subjects;
            $formatted_term = $sections->first()?->formatted_term;

            return view('search.professor-subjects', compact('name', 'nameWithSpaces', 'first_word', 'professor', 'sections', 'formatted_term'));



    }
}
