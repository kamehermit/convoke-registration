<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $fillable = ['item'];

    public function coupon() {
        return $this->belongsToMany(FoodCoupon::class, 'food_coupon_items','food_item_id','food_coupon_id');
    }

    public function food_registration(){
    	return $this->hasMany(FoodRegistration::class);
    }

    public function registration(){
        return $this->belongsToMany(Registration::class,'food_registrations','food_item_id','registration_id');
    }
}
