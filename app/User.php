<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $register_validation_rules = [
        'id' => 'required|exists:events',
        'name' => 'required',
        'email' => 'required|email|Unique:users',
        'phone' => 'required|Unique:users',
        'g-recaptcha-response' => 'required|captcha'
    ];

    function registration(){
        return $this->hasMany(Registration::class);
    }
}
