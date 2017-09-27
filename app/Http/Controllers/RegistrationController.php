<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;

class RegistrationController extends Controller
{
    public function registration($event_id){
    	$event_data = Event::where('events.id',$event_id)->leftJoin('categories','categories.id','=','events.category_id')->get(['events.id as id','name','category','image','description','nm_tickets','nm_tickets_amt','eb_tickets','eb_tickets_amt','start_date_time','end_date_time','room_no'])->first();
    	return view('pages.registration',['event_data' => $event_data]);
    }

    public function event($event_id){
    	$event_data = Event::where('events.id',$event_id)->leftJoin('categories','categories.id','=','events.category_id')->get(['events.id as id','name','category','image','description','nm_tickets','nm_tickets_amt','eb_tickets','eb_tickets_amt','start_date_time','end_date_time','room_no'])->first();
    	return view('pages.event',['event_data' => $event_data]);
    }


}
