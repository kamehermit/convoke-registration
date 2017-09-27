<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
    public function payment(Request $request){
    	$data = $request->all();
    	return $data;	
    }

    public function fail(Request $request){
    	$data = $request->all();
    	echo $data;
    }

    public function success(Request $request){
    	$data = $request->all();
    	echo $data;
    }
}
