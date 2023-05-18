<?php

namespace App\Http\Controllers;

use App\Models\ReinforcementsMath;
use Illuminate\Http\Request;

class MathReinfoncementController extends Controller
{
    public function index(){
        $basic_maths = ReinforcementsMath::where('subject', 'MAT-160 / MAT-111')->orWhere('subject','MAT-160')->orWhere('subject', 'MAT-111')->orWhere('subject', 'MAT-010 / MAT-126')->orWhere('subject', 'MAT-010')->orWhere('subject', 'MAT-126')->get();
        $college_algebra = ReinforcementsMath::where('subject', 'MAT-121')->get();
        $higher_math = ReinforcementsMath::where('subject', 'MAT-127')->get();
        $first_calculus = ReinforcementsMath::where('subject', 'MAT-131')->get();
        $second_calculus = ReinforcementsMath::where('subject', 'MAT-132')->get();

        $discrete_maths = ReinforcementsMath::where('subject', 'MAT-151')->get();

        $linear_algebra = ReinforcementsMath::where('subject', 'MAT-222')->get();
        $financial_maths_II = ReinforcementsMath::where('subject', 'MAT-242 / MAT-242')->orWhere('subject', 'MAT-242')->get();
        $statistics_I = ReinforcementsMath::where('subject', 'MAT-250')->get();
        $statistics_II = ReinforcementsMath::where('subject', 'MAT-251')->get();
        $probability_statistics = ReinforcementsMath::where('subject', 'MAT-252')->get();
        $probability_statistics_engineering = ReinforcementsMath::where('subject', 'MAT-253')->get();


        $applied_maths = ReinforcementsMath::where('subject', 'MAT-260')->get();
        $differential_equations = ReinforcementsMath::where('subject', 'MAT-270')->get();

        return view('reforzamientos_mates', compact('basic_maths', 'college_algebra', 'higher_math', 'first_calculus', 'second_calculus', 'discrete_maths', 'linear_algebra', 'financial_maths_II', 'statistics_I', 'statistics_II', 'probability_statistics', 'probability_statistics_engineering', 'applied_maths', 'differential_equations'));
    }
}
