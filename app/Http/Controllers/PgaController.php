<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Pensum; 
use App\Models\Grade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PgaController extends Controller
{
    public function create()
    {
        /**
         *Aquí hay varios datos, $careers para todas las carreras del usuario autenticado o no.
         *Grades los grados para autenticados o no.
         *cmp significa career multiple pensum
         *sp significa single pensum
         *CareerIcon esta ahi para obtener el icono de la carrera del usuario sin importar si es cmp o sp
         */
        $careers = Cache::rememberForever('careers', function () {
            return Career::all();
        });
        $grades = Cache::rememberForever('grades', function () {
            return Grade::all();
        });

        // Obtener la carrera del usuario actual y su icono asociado

        if (Auth::check()) {
            $userCareer = Auth::user()->career;
            $careerCmp = Career::where('name', $userCareer)->where('class', 'cmp')->first();
            $careerSp = Career::where('name', $userCareer)->where('class', 'career')->first();
            $careerIcon = Career::where('name', $userCareer)->first();

            $iconClass = $careerIcon->icon_class;
            // Enviar variables a la vista
            return view('calcular', compact('careers', 'grades', 'userCareer', 'iconClass', 'careerCmp', 'careerSp'));
        }
        return view('calcular', compact('careers', 'grades'));
    }

    public function show(Request $request)
    {
        $request->validate([
            'career' => 'required|exists:App\Models\Pensum'
        ]);

        $pensum = Pensum::whereCareer($request->input('career'))->get()->toJson();

        return response()->json($pensum);
    }
}
