@extends('layouts.front')

@section('content')
<br>
<div class="container">
		<div class="image_display_r">
			<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BATHROOM1.JPG" style="max-height:100%; width: 100%; display: block;">
			<div class="image_display_text_container">
				<p>Our work is a cut above the rest!</p>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
					<h1 class="display-3">{{$title}}</h1>
					<p class="lead">
						@if(count($services) > 0)
							<ul>
								@foreach($services as $service)
									<li>{{$service}}</li>
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
						<p>Our work is a cut above the rest!</p>
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
						<p>Our work is a cut above the rest!</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="image_display_r">
					<img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1A.JPG" style="max-height:100%; width: 100%; display: block;">
					<div class="image_display_text_container">
						<p>Our work is a cut above the rest!</p>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>
@endsection
