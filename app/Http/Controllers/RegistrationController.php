<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use App\Registration;
use App\User;
use App\FoodCoupon;
use App\FoodRegistration;
use App\Team;

class RegistrationController extends Controller
{
    public function registration($event_id){
        if($event_id == 94674457)
            return redirect('http://register.hashhacks.tech');

    	$event_data = Event::find($event_id);
        if($event_data->participants > 1){
            return view('pages.team-registration',['event_data' => $event_data]);
        }
    	return view('pages.registration',['event_data' => $event_data]);
    }

    public function event($event_id){
        if($event_id == 94674457)
            return redirect('http://hashhacks.tech');
    	$event_data = Event::find($event_id);
    	return view('pages.event',['event_data' => $event_data]);
    }

    public function team_registration($event_id,$team_code){
        $event_data = Event::find($event_id);
        $team = Team::where('code',$team_code)->get()->first();
        $members = Team::find($team->id)->user;
        return view('pages.member-registration',['event_data' => $event_data,'team'=>$team,'members'=>$members]);
    }

/*
    public function test(){
    	$register = new Registration;
    	$register->transaction_id = 'i8u7y6t5r4e3w2q1asdf'; 
   		$register->event_id = 1;
   		$register->amount = 100;
   		$register->date_time = '2017-10-13 13:00:00';

    	$user = new User;
    	$user->name='Animesh';
    	$user->email='animesh.kuzur@outlook.com';
    	$user->phone='+918447310212';
    	$user->save();

    	$register->user_id=$user->id;
    	$register->save();

    	$food_items = FoodCoupon::find(1);
    	foreach($food_items->items as $item){
    		$food = new FoodRegistration;
    		$food->registration_id = $register->id;
    		//$food->food_coupon_id = $food_items->id;
    		$food->food_item_id = $item->id;
    		$food->save();	
    	}

    	$data = Registration::find($register->id);
    	return $data->user;
    	

    }
*/
}
