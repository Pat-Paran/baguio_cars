@extends('layouts.master')
@section('content')
		<div class="row">
			<h5>Sell your ride now! <b>*FREE</b></h5>
		</div>
		<div class="row">
			{{Form::open(['route'=>'sell.store','files' => true])}}
	      	<div class="large-6 medium-6 small-6 columns">
	      		
	      			{{Form::label('name','Name:')}}
	      			{{Form::text('name')}}
	      			{{$errors->first('name','<span class="error">:message</span>')}}

	      			{{Form::label('make','Make:')}}
	      			{{Form::text('make')}}
	      			{{$errors->first('make','<span class="error">:message</span>')}}

	      			{{Form::label('model','Year Model:')}}
	      			{{Form::text('model')}}
	      			{{$errors->first('model','<span class="error">:message</span>')}}

	      			{{Form::label('color','Color:')}}
	      			{{Form::text('color')}}
	      			{{$errors->first('color','<span class="error">:message</span>')}}

	      			{{Form::label('machine','Machine:')}}
	      			{{Form::text('machine')}}
	      			{{$errors->first('machine','<span class="error">:message</span>')}}

	      			{{Form::label('transmission','Transmission:')}}
	      			{{ Form::select('transmission',array(
	      					'M/T' => 'Manual', 
	      					'A/T' => 'Automatic',
	      					'SAT' => 'Semi-Automatic')) }}
	      			{{$errors->first('transmission','<span class="error">:message</span>')}}		

	      			{{Form::label('wheel','Wheel:')}}
	      			{{ Form::select('wheel', array(
	      					'2-wheel' => '2-wheel', 
	      					'4-wheel' => '4-wheel')) }}
	      			{{$errors->first('wheel','<span class="error">:message</span>')}}		

	      			{{Form::label('condition','Condition:')}}
	      			{{ Form::select('condition',array(
	      					'Brand New' => "Brand New", 
	      					'Second hand' => 'Second hand')) }}	
	      			{{$errors->first('condition','<span class="error">:message</span>')}}		

	      			{{Form::label('mileage','Mileage(km):')}}
	      			{{Form::text('mileage')}}
	      			{{$errors->first('mileage','<span class="error">:message</span>')}}
	      		
	      	</div>
	      	<div class="large-6 medium-6 small-6 columns">
	      			

	      			{{Form::label('orcr','With OR/CR:')}}
	      			{{ Form::select('orcr',array(
	      					'Yes' => "yes", 
	      					'no' => 'no')) }}	
	      			{{$errors->first('orcr','<span class="error">:message</span>')}}


	      			{{Form::label('price','Asking Price(Peso,separate with comma):')}}
	      			{{Form::text('price')}}
	      			{{$errors->first('price','<span class="error">:message</span>')}}

	      			{{Form::label('Negotiable','Negotiable:')}}
	      			{{ Form::select('negotiable',array(
	      					'Yes' => "yes", 
	      					'no' => 'no')) }}	
	      			{{$errors->first('negotiable','<span class="error">:message</span>')}}

	      			{{Form::label('mobile','Mobile Number:')}}
	      			{{Form::number('mobile')}}
	      			{{$errors->first('mobile','<span class="error">:message</span>')}}

	      			{{Form::label('phone','Phone Number:')}}
	      			{{Form::number('phone')}}	
	      			{{$errors->first('phone','<span class="error">:message</span>')}}


	      			{{Form::label('accesories','Accesorries:')}}
	      			{{Form::textarea('accesories')}}
	      			{{$errors->first('accesories','<span class="error">:message</span>')}}

	      			{{Form::label('image','Please Upload Image')}}
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

	      			{{Form::label('serial','Serial Key')}}
	      			{{Form::text('serial')}}
	      			{{$errors->first('serial','<span class="error">:message</span>')}}

	      			{{Form::submit('Post Ad ')}}

	      			
	      	</div>
	      	{{Form::close()}}
		</div>
@stop
