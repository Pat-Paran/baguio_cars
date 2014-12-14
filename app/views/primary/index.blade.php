@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<h5 class="featuredText">Featured Cars</h5>
			</div>
		</div>
		<div class="featuredCars">
			<div class="row">
				@foreach($cars as $cars)
				<div class="large-4 medium-6 small-12 columns rowCars end">
					<div class="carWrap clearfix">
						<h4>{{$cars->car_name}}</h4>
						<h4>{{$cars->car_make}}</h4>
						<img src="src/img/cars/{{$cars['time']}}1.jpg">
						<ul class="labelDetails">
							<li>Model</li>
							<li class="transSize">Transmission</li>
							<li>Color</li>
						</ul>
						<ul class="labelDetails">
							<li>{{$cars->car_model}}</li>
							<li class="transSize">{{$cars->car_transmission}}</li>
							<li>Red</li>
						</ul>
						<span class="price">{{$cars->car_price}}</span>
						<a> {{link_to("/{$cars->id}",'View details', array('class'=>'btnView'))}}</a>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
@stop
