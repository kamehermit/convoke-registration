<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Event;
use Softon\Indipay\Facades\Indipay;  
use Carbon\Carbon;
use App\Registration;
use App\FoodCoupon;
use App\FoodRegistration;

class HashhacksPaymentController extends Controller
{
	protected $parameters = array();
	protected $event;

	function __construct(Request $request)
	{

		$this->validate($request,User::$hashhacks_validation_rule);
		$data = $request->all();
		$this->event = Event::find(94674457);
		if($u_id = User::where('email',$data['email'])->get()->first()){
            $this->parameters['udf4'] = $u_id->id;
        }
		/*
		if(isset($data['code'])){
			$this->validate($request, User::$member_register_validation_rules);
			$this->parameters['udf3'] = $data['code'];
            if($data['food_coupon_id'])
                $this->parameters['udf1'] = $data['food_coupon_id'];
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
		*/
    	
    	$this->parameters['firstname'] = $data['name'];
    	$this->parameters['email'] = $data['email'];
    	$this->parameters['phone'] = $data['phone'];
    	$this->parameters['txnid'] = $this->generateTransactionID();
    	$this->parameters['productinfo'] = $this->event->id;
    	$this->parameters['amount'] = $this->get_price();
    	$this->parameters['token'] = $data['token'];
    	$this->parameters['udf5'] = 'hashhacks';

  	}

    public function payment(Request $request){
    	$this->register();
     	if($this->parameters['token'] == 'Convoke is AWESOME'){
     		$order = Indipay::prepare($this->parameters);
      		return Indipay::process($order);
     	}
     	else{
     		return "Invalid Credentials";
     	}
      	
    }

    public function generateTransactionID(){
        return substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    }

    public function get_price(){
      	$price = 0.00;
    	if($this->event->eb_tickets){
    		$price = $this->event->eb_tickets_amt;
            $price += ($price*3.10)/100;
        }
        else{
    	   $price = $this->event->nm_tickets_amt;
           $price += ($price*3.10)/100;
        }
        //$price =1.00;

    	/*if(isset($this->parameters['udf1'])){
    		$food = FoodCoupon::find($this->parameters['udf1']);
    		$price = $price + $food->amount;
            $price += ($price*3.10)/100;
     	}
     	*/
      	return $price;
    }

    public function register(){
    	$cur_date = Carbon::now('Asia/Kolkata');
    	$user_id = 0;
    	if(isset($this->parameters['udf4'])){
    		$user_id = $this->parameters['udf4'];
    	}
    	else{
    		$user = new User;
    		$user->name = $this->parameters['firstname'];
    		$user->email = $this->parameters['email'];
    		$user->phone = $this->parameters['phone'];
    		$user->save();

    		$user_id = $user->id;	
    	}

    	$register = new Registration;
    	$register->transaction_id = $this->parameters['txnid'];
    	$register->event_id = $this->parameters['productinfo'];
    	$register->amount = $this->parameters['amount'];
    	$register->date_time = $cur_date;
   		$register->user_id = $user_id;
    	$register->save();
    	
    	$food_items = FoodCoupon::find(2);
    	foreach($food_items->items as $item){
	    	$food = new FoodRegistration;
	    	$food->registration_id = $register->id;
	    	$food->food_item_id = $item->id;
	    	$food->save();	
	    }

    	
    	/*
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
        	$team->user()->attach($user_id);
        	$register->team()->attach($team->id);
    	}

    	if(isset($this->parameters['udf3'])){
    		$team_id = Team::where('code',$this->parameters['udf3'])->get(['id'])->first();
    		$team = Team::find($team_id->id);
    		//$team = new Team;
    		$team->user()->attach($user_id);
    		$register->team()->attach($team->id);
    	}
    	//return 0;
    	*/
    }
}
