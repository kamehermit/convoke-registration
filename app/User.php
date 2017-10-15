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
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public static $team_register_validation_rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'team_name' => 'required|unique:teams',
    ];

    public static $member_register_validation_rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'code' => 'required|exists:teams',
    ];

    public static $event_id_validation_rule = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'id' => 'required|exists:events',
        'g-recaptcha-response' => 'required|captcha'
    ];

    public function registration(){
        return $this->hasMany(Registration::class);
    }

    public function team(){
        return $this->belongsToMany(Team::class,'team_members','user_id','team_id');
    }

}
