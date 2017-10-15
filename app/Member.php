<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['name', 'contact'];

    public function event() {
        return $this->belongsToMany(Event::class, 'event_incharges', 'member_id', 'event_id');
    }
}
