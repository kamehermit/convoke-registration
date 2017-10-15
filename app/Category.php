<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('category');

    public function event(){
    	return $this->hasMany(Event::class);
    }
}
