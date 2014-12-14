<?php

class sellController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sell=sell::all();
		return View::make('primary.sell',['sell'=>$sell]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		
		

		
		$sell = new sell();
		$sell->first_name=Input::get('first_name');
		$sell->email=Input::get('email');
		$sell->password=Input::get('password');
		$sell->password_confirmation=Input::get('password_confirmation');
		$sell->car_name=Input::get('car_name');
		$sell->car_make=Input::get('car_make');
		$sell->car_model=Input::get('car_model');
		$sell->car_color=Input::get('car_color');
		$sell->car_machine=Input::get('car_machine');
		$sell->car_transmission=Input::get('car_transmission');
		$sell->car_wheels=Input::get('car_wheels');
		$sell->car_condition=Input::get('car_condition');
		$sell->car_mileage=Input::get('car_mileage');
		$sell->car_or_cr=Input::get('car_or_cr');
		$sell->car_price=Input::get('car_price');
		$sell->car_negotiable=Input::get('car_negotiable');
		$sell->car_mobile=Input::get('car_mobile');
		$sell->car_phone=Input::get('car_phone');
		$sell->car_accesories=Input::get('car_accessories');
		$sell->time=date('Y-m-d H:m') . Input::get('email');
		if(Input::hasfile('imageOne')){
			$imageOne=Input::file('imageOne');
			$filename  = date('Y-m-d H:m') . Input::get('email').'1'. '.' . 'jpg';
			$path = public_path('src/img/cars/' . $filename);
			Image::make($imageOne->getRealPath())->resize(468, 249)->save($path)->encode('jpg', 75);
		}
		if(Input::hasfile('imageTwo')){
			$imageTwo=Input::file('imageTwo');
			$filename  = date('Y-m-d H:m') . Input::get('email').'1'. '.' . 'jpg';
			$path = public_path('src/img/cars/' . $filename);
			Image::make($imageTwo->getRealPath())->resize(468, 249)->save($path)->encode('jpg', 75);
		}
		if(Input::hasfile('imageThree')){
			$imageThree=Input::file('imageThree');
			$filename  = date('Y-m-d H:m') . Input::get('email').'1'. '.' . 'jpg';
			$path = public_path('src/img/cars/' . $filename);
			Image::make($imageOne->getRealPath())->resize(468, 249)->save($path)->encode('jpg', 75);
		}
		if(Input::hasfile('imageFour')){
			$imageFour=Input::file('imageFour');
			$filename  = date('Y-m-d H:m') . Input::get('email').'1'. '.' . 'jpg';
			$path = public_path('src/img/cars/' . $filename);
			Image::make($imageFour->getRealPath())->resize(468, 249)->save($path)->encode('jpg', 75);
		}
		if(Input::hasfile('imageFive')){
			$imageFive=Input::file('imageFive');
			$filename  = date('Y-m-d H:m') . Input::get('email').'1'. '.' . 'jpg';
			$path = public_path('src/img/cars/' . $filename);
			Image::make($imageFive->getRealPath())->resize(468, 249)->save($path)->encode('jpg', 75);
		}
		

		 $sell->save();


		if ( $sell->save() ) {
        
           return Redirect::route( 'sell.index' )->with( 'message', 'Thanks for registering!' );
          
        } else {
           return Redirect::route( 'sell.index' )->withInput()->withErrors( $sell->errors() );

        }
		return Redirect::route('sell.index'); 
		
	}
	

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
