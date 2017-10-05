<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
	protected $fillable = ['transaction_id', 'event_id','amount','date_time'];
	function user(){
    	return $this->belongsTo(User::class);
    }
}
