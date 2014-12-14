@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<h5 class="featuredText">Featured Cars</h5>
			</div>
		</div>
		<div class="featuredCars">
			<div class="row">
				<div class="large-4 medium-6 small-12 columns rowCars end">
					<div class="carWrap clearfix">
						<h4>{{$cars['time']}}</h4>

						@for ($i=1; $i<=5; $i++)
						 <img src="src/img/cars/{{$cars['time']}}{{$i}}.jpg">
						@endfor
						
					</div>
				</div>
				
			</div>
		</div>
@stop