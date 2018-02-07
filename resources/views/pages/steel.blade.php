@extends('layouts.front')

@section('content')
	<br>
	<div class="container">
		@include('inc.pagelabel')
		<div class="card border border-dark rounded image_display_r">
			<img class="card-img-top" src="/images/mdg_images/IMG_00111.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Customized Steel made to order!</h5>
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
				</div>card border border-dark rounded image_display_r
			</div>
			<div class="col">
				<div class="card border border-dark rounded image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/steel/steel_barn3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Steel Pens!</p>
					</div>
				</div>

				<br>
			</div>
		</div>
	</div>
</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="card border border-dark rounded image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/steel/steel_barn4.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="card-body">
						<div class="card-title">
							<p>Custom Steel Barn Interior! </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col">

				<div class="card border border-dark rounded image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/steel/steel_barn2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="card-body">
						<div class="card-title">
							<p>Customized Steel Structures! </p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br>

		<div class="card image_display_r">
			<img class="card-img-top" alt="A scenic home image" src="/images/steel/steel_barn1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
			<div class="card-body">
				<div class="card-title">
					<p>Custom Steel Structures! </p>
				</div>
			</div>
		</div>

	</div>
	<br>
@endsection
