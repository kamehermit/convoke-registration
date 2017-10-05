<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Event;
use App\Http\Requests;
use Softon\Indipay\Facades\Indipay;  
use Carbon\Carbon;
use App\Registration;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function payment(Request $request){
    	$this->validate($request, User::$register_validation_rules);
    	$data = $request->all();
    	$price = $this->get_price($data['id']);
    	$event_id = $this->get_event($data['id']);
    	$txnid = $this->generateTransactionID();
    	$cur_date = Carbon::now('Asia/Kolkata');
    	$parameters = [
      		'firstname' => $data['name'],
      		'email' => $data['email'],
      		'phone' => $data['phone'],
        	'txnid' => $txnid,
        	'productinfo' => $event_id,
        	'amount' => $price,
     	];
     	if($price<=0.00){
     		$this->free_registration($parameters);
			return $client->post(env('INDIPAY_SUCCESS_URL', '/success'), [
    			'form_params' => $parameters
			]);
     	}
     	$parameters['amount'] = 1.00; //capped transaction amount for testing
     	$this->register($parameters);
      	$order = Indipay::prepare($parameters);
      	return Indipay::process($order);
    }

    public function fail(Request $request){
    	$data = $request->all();
    	$check = Registration::where('transaction_id',$data['txnid'])->get()->first();
    	if($check){
    		$delete = Registration::where('transaction_id',$data['txnid'])->delete();
    	}
    	return $data;
    }

    public function success(Request $request){
    	$data = $request->all();
    	Registration::where('transaction_id',$data['txnid'])->update(['verified'=>1]);
    	return $data;
    }

    public function get_price($event_id){
    	$check = Event::where('id',$event_id)->get()->first();
    	if($check->eb_tickets)
    		return $check->eb_tickets_amt;
    	return $check->nm_tickets_amt;
    }

    public function get_event($event_id){
    	$event = Event::where('id',$event_id)->get(['id'])->first();
    	return $event->id; 
    }

    public function send_mail(){
    	$data = ['data'=>'Hi!'];
    	Mail::send('emails.test', $data, function ($m) {
            $m->from('convoke.ducic@gmail.com', 'Convoke');
            $m->to('pankaj11520@ducic.ac.in', 'Pankaj')->subject('Convoke Registration');
        });
    }

    public function generateTransactionID(){
        return substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    }

    public function register($data){
    	$cur_date = Carbon::now('Asia/Kolkata');
    	$new_registration = User::create([
        	'name' => $data['firstname'],
   			'email' => $data['email'],
   			'phone' => $data['phone']
       	]);	
   		$new_registration->registration()->create([
   			'transaction_id' => $data['txnid'], 
   			'event_id' => $data['productinfo'],
   			'amount' => $data['amount'],
   			'date_time' => $cur_date
   		]);
    }

    public function free_registration($data){
    	$this->register($data);
    	Registration::where('transaction_id',$data['txnid'])->update(['verified'=>1]);
    }

    public function test(){
    	return view('pages.success');
    }
}
