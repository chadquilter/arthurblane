@extends('layouts.front')

@section('content')
<br>
<div class="container">


			<div class="row">
				<div class="col-sm-2 alert alert-primary">
					<h1><span class="badge badge-secondary">BAM!</span></h1>
				</div>
				<div class="col-sm-10 alert alert-light image_display_r">
					<strong class="display-3"> {{ $title }} </strong>
				</div>
			</div>

			<div class="image_display_r">
				<div class="card">
	  			<img class="card-img-top" src="/images/2_orig.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h5 class="card-title">Custom Built Outdoor walkways and Paths!</h5>
	  			</div>
				</div>
			</div>

		<br>

		<div class="row">
			<div class="col">
				<div class="jumbotron">
						<strong class="display-2">{{$title}}</strong>
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
					<img class="img-fluid" alt="A scenic home image" src="/images/ARCH1.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Roof and Room Extension!</p>
					</div>
				</div>

				<br>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/CustomShower.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Designed Shower!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BATHROOM1.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Full Bath!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/window1.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Room Renovation!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Cupbord Remodeling!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_44444.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Damage Repair!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/hall.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Remodeling!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/5_orig.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Repair Siding and Damage!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/4_orig.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Outdoor Rock Steps!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Vanity!</p>
					</div>
				</div>
			</div>
			<div class="col">
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
