<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
	protected $fillable = ['registration_id', 'refunded'];

    public function registration(){
    	return $this->belongsTo(Registration::class);
    }
}
