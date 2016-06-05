<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
use Illuminate\Support\Facades\Request;
Route::get ( '/', function () {
	return view ( 'home' );
} );
Route::any ( 'sendemail', function () {
	if (Request::get ( 'message' ) != null)
		$data = array (
				'bodyMessage' => Request::get ( 'message' ) 
		);
	else
		$data [] = '';
	Mail::send ( 'email', $data, function ($message) {
		
		$message->from ( 'donotreply@demo.com', 'Just Laravel' );
		
		$message->to ( Request::get ( 'toEmail' ) )->subject ( 'Learning Laravel test email' );
	} );
	return Redirect::back ()->withErrors ( [ 
			'Your email has been sent successfully' 
	] );
} );
