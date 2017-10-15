<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodRegistration extends Model
{
	
    protected $fillable = ['registration_id','food_item_id','availed'];
    /*
    //public function registration(){
    //	return $this->belongsTo(Registration::class);
    //}

    public function item(){
        return $this->belongsTo(FoodItem::class);
    }

    public function coupon(){
    	return $this->belongsTo(FoodCoupon::class);
    }
    */
}
