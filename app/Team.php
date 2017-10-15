<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['team_name', 'code','registration_id'];

 	public function user(){
 		return $this->belongsToMany(User::class,'team_members','team_id','user_id');
 	}   

 	public function register(){
    	return $this->belongsToMany(Registration::class,'registration_teams','team_id','registration_id');
    }
}
