<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = array('name', 'category_id','room_no','image','description','nm_tickets','nm_tickets_amt','eb_tickets','eb_tickets_amt','end_date_time','start_date_time');

	public function category(){
		return $this->belongsTo(Category::class);
	}

    public function registration(){
    	return $this->hasMany(Registration::class);
    }

    public function members() {
        return $this->belongsToMany(Member::class, 'event_incharges', 'event_id', 'member_id');
    }
}
