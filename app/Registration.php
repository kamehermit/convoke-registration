<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
	protected $fillable = ['user_id', 'event_id','transaction_id','amount','date_time','checkin','verified'];

	public function user(){
    	return $this->belongsTo(User::class);
    }

    public function event(){
    	return $this->belongsTo(Event::class);
    }

    //function food(){
    //	return $this->hasMany(FoodRegistration::class);
    //}

    public function food_item(){
        return $this->belongsToMany(FoodItem::class,'food_registrations','registration_id','food_item_id');
    }

    public function team(){
        return $this->belongsToMany(Team::class,'registration_teams','registration_id','team_id');
    }

    public function scan(){
        return $this->belongsToMany(Admin::class,'scans','registration_id','admin_id');
    }

    public function refund(){
        return $this->hasMany(Refund::class);
    }
}
