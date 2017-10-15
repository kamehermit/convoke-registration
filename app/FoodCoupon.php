<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCoupon extends Model
{
    protected $fillable = ['name', 'amount'];

    public function items() {
        return $this->belongsToMany(FoodItem::class, 'food_coupon_items', 'food_coupon_id', 'food_item_id');
    }

    public function food_registration(){
    	return $this->hasMany(FoodRegistration::class);
    }
}
