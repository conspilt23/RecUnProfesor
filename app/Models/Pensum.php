<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
     protected $fillable = [
         'career',
         'quarter',
         'code',
         'subject',
         'credits',
         'pre_requirements'
     ];
}
