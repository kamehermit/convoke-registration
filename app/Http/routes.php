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
    return view('welcome');
});
Route::get('/event/{event_id}',['uses'=>'RegistrationController@event']);
Route::get('/event/{event_id}/registration',['uses'=>'RegistrationController@registration']);
Route::post('/payment',['as'=>'payment','uses'=>'PaymentController@payment']);
Route::post('/fail',['as' => 'fail','uses' => 'PaymentController@fail']);
Route::post('/success',['as' => 'success','uses' => 'PaymentController@success']);