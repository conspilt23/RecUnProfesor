<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = "progress";
    protected $fillable = ['user_id','select_name','option_value'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
