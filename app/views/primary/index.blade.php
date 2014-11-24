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
				<div class="large-4 medium-6 small-12 columns">
					<div class="carWrap clearfix">
						<h4>{{$cars->car_name}}</h4>
						<h4>{{$cars->car_make}}</h4>
						<img class="imgHome"src="src/img/slider/camry.jpg">
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
						<a class="btnView" href="">View Details</a>
					</div>
				</div>
				@endforeach
				<div class="large-4 medium-6 small-12 columns">
				is
				</div>
				<div class="large-4 medium-6 small-12 columns">
				pogi
				</div>
			</div>
		</div>
@stop
