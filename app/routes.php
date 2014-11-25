<?php
use App\Models;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('home', function()
{
	return View::make('hotel.index');
	 
});

Route::post('availability', function()
{
	$in = Input::get('checkin');
	$convertin = date("Y-m-d", strtotime($in));
	$out = Input::get('checkout');
	$convertout = date("Y-m-d", strtotime($out));
	$rooms = new HotelRoom();
	$availability=$rooms->availability($convertin, $convertout);
	return View::make('hotel.availability')
		->with('availabilities',$availability);
});

Route::get('room/{availability}', function($availability){
	//$get = Input::get('roomnumber');
	$rooms = new HotelRoom();
	$room = $rooms->selectRoom($availability);
	Session::put('nomroom', $room);
	//return View::make('hotel.room')
	//return View::make('hotel.guest-form')
	return Redirect::to('guestdetail');
});

Route::get('guestdetail', function()
{
	$message = Session::get('nomroom');
	return View::make('hotel.guest-form')
		->with('noroom',$message);
});

Route::post('guestdetail',function(){
	$rules = array(
		'firstname' 	=> 'required',
		'lastname' 		=> 'required',
		'city' 			=> 'required',
		'country' 		=> 'required',
		'telephone' 	=> 'required',
		'email'			=> 'required|email',
		'credit'		=> 'required',
		'cardnumber'	=> 'required',
		'month-ex'		=> 'required',
		'year-ex'		=> 'required',
		'holdername'	=> 'required',
		'condition'		=> 'required'
	);

	$validator = Validator::make(Input::all(),$rules);
	$gets = Session::get('nomroom');

	if($validator->fails()) {
		$messages = $validator->messages();
		//return Redirect::to('guestdetail')
		return View::make('hotel.guest-form')
			->with('noroom',$gets)
			->withErrors($validator);
	}
	else {
		//return Redirect::to('guestdetail')
		return View::make('hotel.guest-form')
		->with('noroom',$gets);
	}
});