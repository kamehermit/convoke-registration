<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Registration;
use App\User;
use App\Event;
use App\Refund;
use App\Scan;
use App\FoodRegistration;

class ApiController extends Controller
{
	protected $uid;
	protected $data;
/*	protected $code;
	protected $message;
*/
    public function __construct(Request $request){
    	$data = $request->all();
    	if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

	}

	public function login(Request $request){
		$data = $request->all();

    	if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

		if(!isset($data['name']))
			return $this->api_response(400,"Parameters missing","");
		Admin::where('id',$admin->id)->update(['name'=>$data['name']]);
		$this->data = [
			'uid' => $this->uid,
			'admin_name' => $data['name']
		];
		return $this->api_response(200,"Login successful",$this->data);

	}

	public function checkin(Request $request){
		$data = $request->all();

		if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

		$events = array();
		$refund = 0.00;
		$team_name = "";
		if(!isset($data['transaction_id']))
			return $this->api_response(400,"Parameters missing","");
		$registration = Registration::where('transaction_id',$data['transaction_id'])->get()->first();
		if(!$registration)
			return $this->api_response(404,"transaction_id no found","");
		$user = User::find($registration->user_id);

		foreach($user->registration as $reg){
			$event = Event::find($reg->event_id);
			if(isset(Registration::find($reg->id)->team[0]))
				$team_name = Registration::find($reg->id)->team[0]->team_name;
			else
				$team_name = "";
			$tmp_data = [
				'id' => $event->id,
				'name' => $event->name,
				'category' => $event->category->category,
				'room_no' => $event->room_no,
				'date_time' => $event->start_date_time,
				'transaction_id' => $reg->transaction_id,
				'team' => $team_name,
				//'refund' => $reg->amount - ($event->nm_tickets_amt+(($event->nm_tickets_amt*3.10)/100))
			]; 
			
			//$refund += $reg->amount - ($event->nm_tickets_amt+(($event->nm_tickets_amt*3.10)/100));
			if($reg->verified){
				array_push($events, $tmp_data);
				Registration::where('id',$reg->id)->update(['checkin'=>1]);
			}

			if(isset(Registration::find($reg->id)->refund[0])){
				if(!Registration::find($reg->id)->refund[0]->refunded)
					$refund = 300.00;
				else
					$refund = 0.00;
			}
		}

		$this->data = [
			'name' => $user->name,
			'email' => $user->email,
			'phone' => $user->phone,
			'events' => $events,
			'refund' => $refund 
		];
		
		$registration = Registration::where('transaction_id',$data['transaction_id'])->get()->first();
		$scan = new Scan;
		$scan->registration_id = $registration->id;
		$scan->admin_id = $admin->id;
		$scan->action = "Checkin";
		$scan->save();

		return $this->api_response(200,"Query successful",$this->data);
	}

	public function refund(Request $request){
		$data = $request->all();

		if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

		if(!isset($data['transaction_id']))
			return $this->api_response(400,"Parameters missing","");

		$registration = Registration::where('transaction_id',$data['transaction_id'])->get()->first();
		if(!$registration)
			return $this->api_response(404,"transaction_id no found","");

		$status = Refund::where('registration_id',$registration->id)->get(['refunded'])->first();
		if($status){
			if($status->refunded == 0){
				$delete = FoodRegistration::where('registration_id',$registration->id)->delete();
				Refund::where('registration_id',$registration->id)->update(['refunded'=>1]);

				$scan = new Scan;
				$scan->registration_id = $registration->id;
				$scan->admin_id = $admin->id;
				$scan->action = "Refund";
				$scan->save();

				return $this->api_response(200,"Refund successful","");
			}
			else{
				return $this->api_response(304,"Already Refunded","");	
			}
		}
		else{
			return $this->api_response(405,"Method not allowed","");
		}
	}

	public function food(Request $request,$id){
		$data = $request->all();
		$response = false;
		if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

		if(!isset($data['transaction_id']))
			return $this->api_response(400,"Parameters missing","");

		$registration = Registration::where('transaction_id',$data['transaction_id'])->get()->first();
		if(!$registration)
			return $this->api_response(404,"transaction_id no found","");
		$food_items = Registration::find($registration->id)->food_item;
		//foreach ($food_items as $food_item) {
		$id = FoodRegistration::where('registration_id',$registration->id)->where('food_item_id',$id)->where('availed','0')->get()->first();
		if($id){
			$response = true;
		}	
		//}

		$this->data = [
			'food_item' => $response 
		];

		$scan = new Scan;
		$scan->registration_id = $registration->id;
		$scan->admin_id = $admin->id;
		$scan->action = "Food Coupon scan";
		$scan->save();

		return $this->api_response(200,"Query successful",$this->data);
	}

	public function deliver(Request $request,$id){
		$data = $request->all();
		//$response = false;
		if(!isset($data['uid']))
    		return $this->api_response(400,"Parameters missing","");
    	else
    		$this->uid = $data['uid'];
    	$admin = Admin::where('uid',$this->uid)->get()->first();
		if(empty($admin))
			return $this->api_response(401,"Unauthorised","");

		if(!isset($data['transaction_id']))
			return $this->api_response(400,"Parameters missing","");

		$registration = Registration::where('transaction_id',$data['transaction_id'])->get()->first();
		if(!$registration)
			return $this->api_response(404,"transaction_id no found","");

		//$food_items = Registration::find($registration->id)->food_item;
		if($id == '3' || $id == '2' || $id == '1'){
			$food_items = Registration::find($registration->id)->food_item;
			foreach ($food_items as $food_item) {
				$a = FoodRegistration::where('registration_id',$registration->id)->where('food_item_id',$food_item->id)->update(['availed'=>1]);
				if($a){
					$this->data = [
						'delivery' => true 
					];
				}
				else{
					$this->data = [
						'delivery' => false 
					];
					return $this->api_response(405,"Method Not Allowed",$this->data);
				}
			}	
		}
		else{
			$a = FoodRegistration::where('registration_id',$registration->id)->where('food_item_id',$id)->update(['availed'=>1]);
			if($a){
				$this->data = [
					'delivery' => true 
				];
			}
			else{
				$this->data = [
					'delivery' => false 
				];
				return $this->api_response(405,"Method Not Allowed",$this->data);
			}
		}
		

		/*$this->data = [
			'delivery' => true 
		];*/

		$scan = new Scan;
		$scan->registration_id = $registration->id;
		$scan->admin_id = $admin->id;
		$scan->action = "Food delivery";
		$scan->save();

		return $this->api_response(200,"Query successful",$this->data);
	}

	public function api_response($code, $message, $data){
		if($code == 200 || $code == 201){
    		return [
    			'status' => 'success',
    			'status_code' => $code,
    			'message' => $message,
    			'data' => $data
    		];
    	}
    	else{
    		return [
    			'status' => 'error',
    			'status_code' => $code,
    			'message' => $message,
    			'data' => $data
    		];
    	}
	}
}
