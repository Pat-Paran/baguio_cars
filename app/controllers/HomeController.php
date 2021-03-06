<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
			$cars=sell::all();
		return View::make('primary.index',['cars'=>$cars]);
	}
	public function details($id){
		$cars=sell::whereId($id)->first();
		return View::make('primary.carDetails',['cars'=>$cars]);
	}

}
