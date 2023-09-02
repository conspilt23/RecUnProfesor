<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'career',
        'email',
        'password',
        'ip_address',
        'status',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function opinions(): HasMany {
        return $this->hasMany(Opinion::class);
    }

    public function replies(): HasMany {
        return $this->hasMany(Reply::class);
    }

    public function reports(): HasMany
{
    return $this->hasMany(Report::class);
}

public function reactions(): HasMany
{
    return $this->hasMany(Reaction::class);
}

public function notifications(): HasMany
{
    return $this->hasMany(Notification::class);
}

public function progress()
    {
        return $this->hasMany(Progress::class);
    }

public function isAdmin()
{
    return $this->role == 'admin';
}

public function isModerator()
{
    return $this->role == 'moderator';
}
}