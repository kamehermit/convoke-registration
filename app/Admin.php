<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $fillable = ['name'];

    public function scan(){
        return $this->belongsToMany(Registration::class,'scans','admin_id','registration_id');
    }
}
