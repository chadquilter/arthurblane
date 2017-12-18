@extends('layouts.front')

@section('content')
<br>
<div class="container">
			@include('inc.pagelabel')
			<div class="image_display_r">
				<div class="card">
	  			<img class="card-img-top" src="/images/dusk-home.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h5 class="card-title">Customized Homes!</h5>
	  			</div>
				</div>
			</div>
		<br>
		<div class="row">
			<div class="col">
				<div class="jumbotron">
						<strong class="display-3">{{$title}}</strong>
						<br>
						include but are not limited to:
					<hr class="my-4">
					<p class="lead">
						@if(count($mdg_services) > 0)
							<ul>
								@foreach($mdg_services as $mdg_service)
									<li>{{$mdg_service}}</li>
								@endforeach
							</ul>
						@else
							<li>Our services listing are currently under construction!</li>
						@endif
					</p>
					<hr class="my-4">
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/homes/home2.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Call for Consultation!</p>
					</div>
				</div>

				<br>
			</div>
		</div>


		<br>
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/homes/home1.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Roof and Room Extensions and Additions!</p>
					</div>
				</div>

		<br>
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/homes/home3.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Homes done Right!</p>
					</div>
				</div>

		<br>
	</div>
</div>
@endsection
