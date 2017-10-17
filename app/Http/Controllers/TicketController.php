<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Registration;
use App\Event;
use App\FoodRegistration;
use App\Http\Requests;
use App\User;
use App\RegistrationTeam;

class TicketController extends Controller
{
    public function success(Request $request){
    	$data = $request->all();
    	$txnid = $data['txnid'];
    	$user = Registration::where('transaction_id',$data['txnid'])->join('users','users.id','=','registrations.user_id')->get(['users.id','users.email','users.name','users.phone'])->first();
    	$this->send_mail($data['firstname'],$data['email'],$data['txnid']);
    	Registration::where('transaction_id',$data['txnid'])->update(['verified'=>1]);
    	$event = Event::find($data['productinfo']);
    	if($event->eb_tickets > 0){
    		Event::where('id',$data['productinfo'])->update(['eb_tickets'=>$event->eb_tickets-1]);
    	}
    	else{
    		Event::where('id',$data['productinfo'])->update(['nm_tickets'=>$event->nm_tickets-1]);	
    	}
    	return view('pages.success',['event'=>$event,'txnid'=>$txnid,'user'=>$user,'team_name'=>$data['udf2']]);
    }

    public function fail(Request $request){
    	$data = $request->all();
    	$check = Registration::where('transaction_id',$data['txnid'])->get()->first();
    	if($check){
    		if(!empty(Registration::find($check->id)->food_item))
    			$delete = FoodRegistration::where('registration_id',$check->id)->delete();
            if(!empty($data['udf2'])){
                //Registration::find($check->id)->team()->detach
                $a = Registration::where('team_name',$data['udf2'])->get()->first();
                $register = Registration::find($a->registration_id);
                $register->team()->detach($a->registration_id);
            }
            //$delete = RegistrationTeam::where('registration_id',$check->id)->delete();
    		$delete = Registration::where('transaction_id',$data['txnid'])->delete();
    		$user = User::where('id',$check->user_id)->delete();
    	}
    	$event = Event::find($data['productinfo']);
    	return view('pages.fail',['event'=>$event,'txnid'=>$data['txnid']]);
    }

    public function send_mail($name,$email,$txnid){
    	$data = ['email'=>$email,'name'=>$name];
        $registration_id = Registration::where('transaction_id',$txnid)->get(['id'])->first();
        $registration = Registration::find($registration_id->id);
        $event = Event::find($registration->event_id);
    	Mail::send(['html'=>'emails.registration'], ['event'=>$event,'registration'=>$registration], function ($m) use ($data){
            $m->from('convoke.ducic@gmail.com', 'Convoke');
            $m->to($data['email'], $data['name'])->subject('Convoke Registration');
        });
    }

    public function download($transaction_id){
        $register = Registration::where('transaction_id',$transaction_id)->get()->first();
        $registration = Registration::find($register->id);
        $event = Event::find($registration->event_id);
        $user = User::find($register->user_id);

        $pdf = \PDF::loadView('pdf.ticket', ['registration'=>$registration,'event'=>$event,'user'=>$user]);
        return $pdf->download('ticket.pdf');
    }

    public function test(){
        $event = Event::find(6);
        $txnid = 'a97395939fc01042e04e';
        $user = Registration::where('transaction_id',$txnid)->join('users','users.id','=','registrations.user_id')->get(['users.id','users.email','users.name'])->first();
        $this->send_mail($user->name,$user->email,$txnid);
        $team_name = 'ANimesh';
        return view('pages.success',['event'=>$event,'txnid'=>$txnid,'user'=>$user,'team_name'=>$team_name]);
    }

    public function test2(){
        $register = Registration::where('transaction_id','a97395939fc01042e04e')->get()->first();
        $registration = Registration::find($register->id);
        $event = Event::find($registration->event_id);
        $user = User::find($register->user_id);
        return view('pdf.ticket',['registration'=>$registration,'event'=>$event,'user'=>$user]);
    }
}
