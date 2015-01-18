@extends('layouts.master')
@section('content')
		<div class="row">
			<h5>Sell your ride now! <b>*FREE</b></h5>
		</div>
		<div class="row">
			{{Form::open(['route'=>'sell.store','files' => true])}}
	      	<div class="large-6 medium-6 small-6 columns">
	      			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	      			{{Form::label('first_name','Personal Name:')}}
	      			{{Form::text('first_name')}}
	      			{{$errors->first('first_name','<span class="error">:message</span>')}}

	      			{{Form::label('email','Email:')}}
	      			{{Form::text('email')}}
	      			{{$errors->first('email','<span class="error">:message</span>')}}

	      			{{Form::label('password','Password:')}}
	      			{{Form::text('password')}}
	      			{{$errors->first('password','<span class="error">:message</span>')}}

	      			{{Form::label('password_confirmation','Password Confirmation:')}}
	      			{{Form::text('password_confirmation')}}
	      			{{$errors->first('password_confirmation','<span class="error">:message</span>')}}
	      		
	      			{{Form::label('car_name','Car Name:')}}
	      			{{Form::text('car_name')}}
	      			{{$errors->first('car_name','<span class="error">:message</span>')}}

	      			{{Form::label('car_make','Make:')}}
	      			{{Form::text('car_make')}}
	      			{{$errors->first('car_make','<span class="error">:message</span>')}}

	      			{{Form::label('car_model','Year Model:')}}
	      			{{Form::text('car_model')}}
	      			{{$errors->first('car_model','<span class="error">:message</span>')}}

	      			{{Form::label('car_color','Color:')}}
	      			{{Form::text('car_color')}}
	      			{{$errors->first('car_color','<span class="error">:message</span>')}}

	      			{{Form::label('car_machine','Machine:')}}
	      			{{Form::text('car_machine')}}
	      			{{$errors->first('car_machine','<span class="error">:message</span>')}}

	      			{{Form::label('car_transmission','Transmission:')}}
	      			{{ Form::select('car_transmission',array(
	      					'M/T' => 'Manual', 
	      					'A/T' => 'Automatic',
	      					'SAT' => 'Semi-Automatic')) }}
	      			{{$errors->first('car_transmission','<span class="error">:message</span>')}}		

	      			{{Form::label('car_wheels','Wheel:')}}
	      			{{ Form::select('car_wheels', array(
	      					'2-wheel' => '2-wheel', 
	      					'4-wheel' => '4-wheel')) }}
	      			{{$errors->first('car_wheels','<span class="error">:message</span>')}}		

	      			{{Form::label('car_condition','Condition:')}}
	      			{{ Form::select('car_condition',array(
	      					'Brand New' => "Brand New", 
	      					'Second hand' => 'Second hand')) }}	
	      			{{$errors->first('car_condition','<span class="error">:message</span>')}}		

	      			{{Form::label('car_mileage','Mileage(km):')}}
	      			{{Form::text('car_mileage')}}
	      			{{$errors->first('car_mileage','<span class="error">:message</span>')}}
	      		
	      	</div>
	      	<div class="large-6 medium-6 small-6 columns">
	      			

	      			{{Form::label('car_or_cr','With OR/CR:')}}
	      			{{ Form::select('car_or_cr',array(
	      					'Yes' => "yes", 
	      					'no' => 'no')) }}	
	      			{{$errors->first('car_or_cr','<span class="error">:message</span>')}}


	      			{{Form::label('car_price','Asking Price(Peso,separate with comma):')}}
	      			{{Form::text('car_price')}}
	      			{{$errors->first('car_price','<span class="error">:message</span>')}}

	      			{{Form::label('car_negotiable','Negotiable:')}}
	      			{{ Form::select('car_negotiable',array(
	      					'Yes' => "yes", 
	      					'no' => 'no')) }}	
	      			{{$errors->first('car_negotiable','<span class="error">:message</span>')}}

	      			{{Form::label('car_mobile','Mobile Number:')}}
	      			{{Form::number('car_mobile')}}
	      			{{$errors->first('car_mobile','<span class="error">:message</span>')}}

	      			{{Form::label('car_phone','Phone Number:')}}
	      			{{Form::number('car_phone')}}	
	      			{{$errors->first('car_phone','<span class="error">:message</span>')}}


	      			{{Form::label('car_accessories','Accesorries:')}}
	      			{{Form::textarea('car_accessories')}}
	      			{{$errors->first('car_accessories','<span class="error">:message</span>')}}

	      			{{Form::label('imageOne','Please Upload Image')}}
	      			{{ Form::file('imageOne')}}
	      			{{$errors->first('imageOne','<span class="error">:message</span>')}}

	      			{{Form::label('image','Please Upload sideview')}}
	      			{{ Form::file('imageTwo')}}
	      			{{$errors->first('imageTwo','<span class="error">:message</span>')}}

	      			{{Form::label('image','Please Upload forntview')}}
	      			{{ Form::file('imageThree')}}
	      			{{$errors->first('imageThree','<span class="error">:message</span>')}}

	      			{{Form::label('image','Please Upload Image')}}
	      			{{ Form::file('imageFour')}}
	      			{{$errors->first('imageFour','<span class="error">:message</span>')}}

	      			{{Form::label('image','Please Upload Image')}}
	      			{{ Form::file('imageFive')}}
	      			{{$errors->first('imageFive','<span class="error">:message</span>')}}

	      			{{Form::submit('Post Ad ')}}

	      			
	      	</div>
	      	{{Form::close()}}
		</div>
		<div class="featuredCars">
			<div class="row">
				@foreach($sell as $sell)
				<div class="large-4 medium-6 small-12 columns rowCars end">
					<div class="carWrap clearfix">
						<h4>{{$sell->car_name}}</h4>
						<h4>{{$sell->car_make}}</h4>
						<img class="imgHome"src="src/img/slider/camry.jpg">
						<ul class="labelDetails">
							<li>Model</li>
							<li class="transSize">Transmission</li>
							<li>Color</li>
						</ul>
						<ul class="labelDetails">
							<li>{{$sell->car_model}}</li>
							<li class="transSize">{{$sell->car_transmission}}</li>
							<li>{{$sell->car_color}}</li>
						</ul>
						<span class="price">{{$sell->car_accesories}}</span>
						<a class="btnView" href="">View Details</a>
					</div>
				</div>
				@endforeach
				
			</div>
@stop
