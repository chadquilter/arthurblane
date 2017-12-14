@extends('layouts.front')

@section('content')
<br>
<div class="container">
		<div class="image_display_r">
			<img class="img-fluid" alt="A scenic home image" src="/images/2_orig.jpg" style="max-height:100%; width: 100%; display: block;">
			<div class="image_display_text_container">
				<p>Custom Built Outdoor walkways and Paths!</p>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
						<strong class="display-5">Our Services include but are not limited to:</strong>
					</h5>
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
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/ARCH1.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Extensions/Overhauls for Rooms and Roofing!</p>
					</div>
				</div>
				<br>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/5_orig.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Repair Siding and Damage!</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/4_orig.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Outdoor Rock Paths and Stairs!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Vanity!</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1A.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Ceiling and Molding!</p>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>
@endsection
