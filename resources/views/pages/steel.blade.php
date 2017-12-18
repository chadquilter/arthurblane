@extends('layouts.front')

@section('content')
<br>
<div class="container">
			@include('inc.pagelabel')
			<div class="image_display_r">
				<div class="card">
	  			<img class="card-img-top" src="/images/mdg_images/IMG_00111.jpg" alt="Card image cap">
	  			<div class="card-body">
	    			<h5 class="card-title">Customized Steel made to order!</h5>
	  			</div>
				</div>
			</div>
		<br>

		<div class="row">
			<div class="col">
				<div class="jumbotron">
						<h3 class="display-3">{{$title}}</h3>
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
					<img class="img-fluid" alt="A scenic home image" src="/images/steel/steel_barn3.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Steel Barn Pen!</p>
					</div>
				</div>

				<br>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/steel/steel_barn4.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Custom Steel Barn Interior!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/steel/steel_barn2.jpg" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Customized Steel Structures!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="image_display_r">
			<img class="img-fluid" alt="A scenic home image" src="/images/steel/steel_barn1.jpg" style="max-height:100%; width: 100%; display: block;">
			<div class="image_display_text_container">
				<p>Custom Steel Structures!</p>
			</div>
		</div>
	</div>
</div>
@endsection
