@extends('layouts.front')

@section('content')
<br>
<div class="container">
			@include('inc.pagelabel')
			<div class="image_display_r">
				<div class="card">
	  			<img class="card-img-top" src="/images/mdg_images/hall.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h5 class="card-title">Professional Interior Finishout, Done right.</h5>
	  			</div>
				</div>
			</div>
		<br>

		<div class="row">
			<div class="col">
				<div class="jumbotron">
						<h4 class="display-4">{{$title}}</h4>
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
					<img class="img-fluid" alt="A scenic home image" src="/images/interior/CABS1.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Kitchen Cupboards!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/interior/window1.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Window Frames and Installation!</p>
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
	</div>
</div>
@endsection
