<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Pensum; 
use App\Models\Grade;
use Illuminate\Support\Facades\Validator;
use App\Models\Progress;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class CareerProgressController extends Controller
{


    public function create(){
        $careers = Career::all();
        if(Auth::check()){
            $userCareer = Auth::user()->career;
            $careerCmp = Career::where('name', $userCareer)->where('class', 'cmp')->first();
            $careerSp = Career::where('name', $userCareer)->where('class', 'career')->first();
            $careerIcon = Career::where('name', $userCareer)->first();
    
            $iconClass = $careerIcon->icon_class;


                // Obtener el usuario autenticado
    $user = auth()->user();

    // Obtener el progreso del usuario
    $progress = $user->progress;

    if ($progress) {
        // El usuario tiene registros de progreso
        return view('pensum', compact('progress', 'userCareer', 'iconClass', 'careerCmp', 'careerSp'));
    } else {
        // El usuario no tiene registros de progreso
        return view('pensum', ['progress' => null, 'userCareer' => $userCareer, 'iconClass' => $iconClass, 'careerCmp' => $careerCmp, 'careerSp' => $careerSp ]);
}
        }

        return view('pensum', compact('careers'));

    }

    public function showPensum(Request $request)
    {
        $request->validate([
            'career' => 'required|exists:App\Models\Pensum'
        ]);

        $pensum = Pensum::whereCareer($request->input('career'))->get()->toJson();

        return response()->json($pensum);
    }


    public function saveProgress(Request $request) {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required|exists:users,id', // El usuario debe existir en la tabla users
                'select_name' => [
                    'required',
                    Rule::unique('progress', 'select_name')
                        ->where('user_id', $request->input('user_id')) // Solo verifica la unicidad para el usuario actual
                        ->ignore($request->input('select_name'), 'select_name') // Excluye el valor actual de select_name
                ], // El nombre del select debe ser único para el usuario autenticado
                'option_value' => 'nullable|integer|min:1|max:3', // La opción debe ser un entero entre 1 y 3, o nula
            ]);
    
            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => 'Error en la validación de datos']);
            }
    
            $user = auth()->user();
            $userCareer = $user->career;
            $careerData = Career::where('name', $userCareer)->first();
            $careerClass = $careerData->class;
            $selectName = $request->input('select_name');
    
            if ($careerClass === 'career') {
                $selectName = $request->input('select_name');
                $parts = explode('_', $selectName);
                $subjectCode = end($parts);
    
                $pensum = Pensum::where('career', $userCareer)->where('code', $subjectCode)->first();
    
                if (!$pensum) {
                    return response()->json(['success' => false, 'message' => 'Asignatura no encontrada en el pensum']);
                }
    
                if ($user->id != $request->input('user_id')) {
                    return response()->json(['success' => false, 'message' => 'Error, ID no coincide']);
                }
    
                $progress = Progress::updateOrCreate(
                    ['user_id' => $user->id, 'select_name' => $selectName],
                    ['option_value' => $request->input('option_value')]
                );
    
                $progress->save();
    
                return response()->json(['success' => true, 'message' => 'Progreso guardado exitosamente']);
            }
    
            if ($user->id != $request->input('user_id')) {
                return response()->json(['success' => false, 'message' => 'Error, ID no coincide']);
            }


    
            $progress = Progress::updateOrCreate(
                ['user_id' => $user->id, 'select_name' => $selectName],
                ['option_value' => $request->input('option_value')]
            );

            $progress->save();
    
            return response()->json(['success' => true, 'message' => 'Progreso guardado exitosamente']);
        } else {
            return redirect()->back()->with('error', 'Acceso no permitido');
        }
    }
    

}