<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReinforcementsMath extends Model
{

    protected $table = "reinforcements_math";

    protected $fillable = [
        'teacher', 'day', 'subject', 'schedule'];
}
