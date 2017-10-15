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
use App\FoodCoupon;
use App\FoodRegistration;
use App\Team;



class PaymentController extends Controller
{

	protected $parameters = array();
	protected $event;
	protected $check = array();

	function __construct(Request $request)
	{
		$this->validate($request,User::$event_id_validation_rule);
		$data = $request->all();
		$this->event = Event::find($data['id']);
		if($u_id = User::where('email',$data['email'])->get()->first()){
			$this->parameters['udf4'] = 1;
			$check = User::find($u_id->id)->registration;
			foreach($check as $key) {
				if($key->event_id == $data['id'])
					return redirect('/event/'.$data['id'])->withErrors('You have already registered to this event!')->withInput();
			}
		}
		if(isset($data['code'])){
			$this->validate($request, User::$member_register_validation_rules);
			$this->parameters['udf3'] = $data['code'];
		}
		else{
			if($this->event->participants > 1){
				$this->validate($request, User::$team_register_validation_rules);
				$this->parameters['udf2'] = $data['team_name'];
				if($data['food_coupon_id'])
					$this->parameters['udf1'] = $data['food_coupon_id'];	
			}
			else{
				$this->validate($request, User::$register_validation_rules);
				if($data['food_coupon_id'])
					$this->parameters['udf1'] = $data['food_coupon_id'];
			}
			
		}
    	
    	$this->parameters['firstname'] = $data['name'];
    	$this->parameters['email'] = $data['email'];
    	$this->parameters['phone'] = $data['phone'];
    	$this->parameters['txnid'] = $this->generateTransactionID();
    	$this->parameters['productinfo'] = $this->event->id;
    	$this->parameters['amount'] = $this->get_price();

  	}

    public function payment(Request $request){
    	$this->register();

    	if($this->parameters['amount'] <= 0.00){
     		$client = new Client();
			return $client->post(env('INDIPAY_SUCCESS_URL', '/success'), [
    			'form_params' => $this->parameters
			]);
    	}
     	$this->parameters['amount'] = 1.00; //capped transaction amount for testing
     	
      	$order = Indipay::prepare($this->parameters);
      	return Indipay::process($order);
    }

    public function generateTransactionID(){
        return substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    }

    public function get_price(){
      	$price = 0.00;
    	if($this->event->eb_tickets)
    		$price = $this->event->eb_tickets_amt;
    	$price = $this->event->nm_tickets_amt;

    	if(isset($this->parameters['udf1'])){
    		$food = FoodCoupon::find($this->parameters['udf1']);
    		$price = $price + $food->amount;
     	}
      	return $price;
    }

    public function register(){
    	$cur_date = Carbon::now('Asia/Kolkata');
    	$user = new User;
    	$user->name = $this->parameters['firstname'];
    	$user->email = $this->parameters['email'];
    	$user->phone = $this->parameters['phone'];
    	$user->save();
    	
    	$register = new Registration;
    	$register->transaction_id = $this->parameters['txnid'];
    	$register->event_id = $this->parameters['productinfo'];
    	$register->amount = $this->parameters['amount'];
    	$register->date_time = $cur_date;
   		$register->user_id = $user->id;
    	$register->save();
    	
    	

    	

    	if($this->parameters['amount'] <= 0.00){
    		Registration::where('id',$register->id)->update(['verified'=>1]);
    	}

    	if(isset($this->parameters['udf1'])){
    		$food_items = FoodCoupon::find(1);
    		foreach($food_items->items as $item){
	    		$food = new FoodRegistration;
	    		$food->registration_id = $register->id;
	    		$food->food_item_id = $item->id;
	    		$food->save();	
	    	}
    	}

    	if(isset($this->parameters['udf2'])){
    		//$check = Team::where('team_name',$this->parameters['udf2'])->get()->first();
    		$team = new Team;
    		//if(empty($check)){
        	$team->team_name = $this->parameters['udf2'];
        	$team->code = substr(hash('sha256',$this->parameters['udf2']), 0, 20);
        	$team->save();
    		//}
        	$team->user()->attach($user->id);
        	$register->team()->attach($team->id);
    	}

    	if(isset($this->parameters['udf3'])){
    		$team_id = Team::where('code',$this->parameters['udf3'])->get(['id'])->first();
    		$team = Team::find($team_id->id);
    		//$team = new Team;
    		$user->team()->attach($team->id);
    		$register->team()->attach($team->id);
    	}
    	//return 0;
    }
    

}
