@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="card border border-dark rounded image_display_r">
			<img class="card-img-top" src="/images/2_orig.jpg" alt="Card image cap">
			<div class="card-body">
				<p class="card-title lead">Custom Built Outdoor walkways and Paths!</p>
			</div>
		</div>
	<br>
	<div class="card bg-secondary border border-dark rounded image_display_r">
		<div class="card-body">
	<div class="row">
		<div class="col">
			<div class="jumbotron">
				<h1 class="display-5">{{$title}}</h1>
				<br>
				<p class="lead">services include but are not limited to:</p>
				<hr class="my-4">
				<p class="lead">
						@include('inc.subservice')
				</p>
				<hr class="my-4">
			</div>
		</div>
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/ARCH1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Custom Roof and Room Extension!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

	<br>
	<div class="row">
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/CustomShower.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Custom Designed Shower!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/IMG_BATHROOM1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Custom Full Bath!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/window1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Room Renovation!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card border border-dark rounded image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p class="lead">Custom Cupbord Remodeling!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</div>
@endsection
