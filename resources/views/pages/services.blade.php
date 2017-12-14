@extends('layouts.front')

@section('content')
<br>
<div class="container">
		<div class="image_display_r">
			<img class="img-fluid" alt="A scenic home image" src="/images/2_orig.jpg" style="max-height:100%; width: 100%; display: block;">
			<div class="image_display_text_container">
				<p>Custom Bathroom and Counters!</p>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
					<h5 class="display-5">At {{ config('app.name', 'MDG')  }} our proffesional quality services are a cut above the rest!
						<br>
						<br>
						Our Services include but not limited to:
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
						<p>Custom Roofing!</p>
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
						<p>Custom Outdoor Walkways!</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/4_orig.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Rock!</p>
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
						<p>Custom Counter Space!</p>
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
