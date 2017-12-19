@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="image_display_r">
		<div class="card">
			<img class="card-img-top" src="/images/3_orig.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Customized Asphalt Driveway</h5>
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
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/asphalt/concrete1z.jpg">
				<div class="card-body">
					<p class="card-title">Custom Metal Work!</p>
				</div>
			</div>
			<br>
		</div>
	</div>
	<br>
</div>
@endsection
