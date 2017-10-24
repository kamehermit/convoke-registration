<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('http://www.convoke.tech');
});
Route::get('/event/{event_id}',['uses'=>'RegistrationController@event']);
Route::get('/event/{event_id}/registration',['uses'=>'RegistrationController@registration']);
Route::group(['middleware' => ['manageRegistration']],function(){
	Route::post('/payment',['as'=>'payment','uses'=>'PaymentController@payment']);	
});
Route::get('/{transaction_id}/download',['uses'=>'TicketController@download']);
Route::get('/event/{event_id}/registration/team/{team_code}',['uses'=>'RegistrationController@team_registration']);

Route::group(['middleware' => ['api']],function(){
	Route::post('/fail',['as' => 'fail','uses' => 'TicketController@fail']);
	Route::post('/success',['as' => 'success','uses' => 'TicketController@success']);
	Route::post('/hashhacks/payment',['as'=>'hashhackspayment','uses'=>'HashhacksPaymentController@payment']);
	Route::post('/hashhacks/test',['as'=>'hashhackstest','uses'=>'TicketController@hashhackstest']); // Debugging route		
});



// Debugging routes
Route::get('/test',['as'=>'test','uses'=>'TicketController@test']);
Route::get('/sendmail',['as'=>'sendmail','uses'=>'TicketController@send_mail']);
Route::get('/test2',['as'=>'test2','uses'=>'TicketController@test2']);
Route::get('/forum',function (){
	return view('payment.forum');
});
//Route::get('/test',['as'=>'test','uses'=>'PaymentController@test']);