@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="card image_display_r">
		<img class="card-img-top" src="/images/excavation/excavation3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
		<div class="card-body">
			<h5 class="card-title">Customized Demolition</h5>
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
						@include('inc.subservice')
				</p>
				<hr class="my-4">
			</div>
		</div>
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/ARCH1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>Custom Roof and Room Extension!</p>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/window1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>Room Renovation!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>Custom Cupbord Remodeling!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</div>
@endsection
