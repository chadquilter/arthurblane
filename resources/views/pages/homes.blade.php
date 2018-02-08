@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="card border border-dark rounded image_display_r">
		<img class="card-img-top" src="/images/dusk-home.jpg" alt="Card image cap">
		<div class="card-body">
			<div class="card-title">
				<p class="lead">Customized Homes!</p>
			</div>
		</div>
	</div>
	<br>

	<div class="card bg-secondary border border-dark rounded image_display_r">
		<div class="card-body">
	<div class="row">
		<div class="col">
			<div class="jumbotron">
				<h4 class="display-4">{{$title}}</h4>
				<br>
				<p class="lead">include but are not limited to:</p>
				<hr class="my-4">
				<p class="lead">
						@include('inc.subservice')
				</p>
				<hr class="my-4">
			</div>
		</div>
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/homes/home2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Call for Consultation!</p>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>
</div>
	<br>
	<div class="card border border-dark rounded image_display_r">
		<img class="card-img-top" alt="A scenic home image" src="/images/homes/home1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
		<div class="card-body">
			<div class="card-title">
				<p class="lead">Roof and Room Extensions and Additions!</p>
			</div>
		</div>
	</div>
	<br>
	<div class="card border border-dark rounded image_display_r">
		<img class="card-img-top" alt="A scenic home image" src="/images/homes/home3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
		<div class="card-body">
			<div class="card-title">
				<p class="lead">Custom Homes done Right!</p>
			</div>
		</div>
	</div>
	<br>
	<div class="card border border-dark rounded image_display_r">
		<img class="card-img-top" alt="A scenic home image" src="/images/job4/front.png" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
		<div class="card-body">
			<div class="card-title">
				<p class="lead">Custom Golf Course Home!</p>
			</div>
		</div>
	</div>
	<br>
</div>
</div>
@endsection
