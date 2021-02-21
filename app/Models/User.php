<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticated;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

/**
 * @method static create(array $array)
 */
class User extends Authenticated
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_verified' => 'bool'
    ];


    public static function generateToken()
    {
        return Str::random(50);
    }


    public function setIsVerifiedAttribute()
    {
        return $this->attributes['is_verified'] = false;
    }
}
