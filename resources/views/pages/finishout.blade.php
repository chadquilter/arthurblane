@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="card image_display_r">
		<img class="card-img-top" src="/images/mdg_images/hall.jpg" alt="Card image cap">
		<div class="card-body">
			<div class="card-title">
				<p>Professional Interior Finish-Out, Done right.</p>
			</div>
		</div>
	</div>
	<br>
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

			<div class="row">
				<div class="col">
					<div class="card image_display_r">
						<img class="card-img-top" alt="A scenic home image" src="/images/interior/CABS1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
						<div class="card-body">
							<div class="card-title">
								<p>Custom Cupboards! </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="card image_display_r">
						<img class="card-img-top" alt="A scenic home image" src="/images/finishout/tile.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
						<div class="card-body">
							<div class="card-title">
								<p>Professional Tile Work!</p>
							</div>
						</div>
					</div>
				</div>
			</div>



			<br>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/interior/window1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p> Window Frames and Installation! </p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>Custom Cupbord Remodeling! </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="card image_display_r">
		<img class="card-img-top" alt="A scenic home image" src="/images/interior/window2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
		<div class="card-body">
			<div class="card-title">
				<p>Custom Bath Counter! </p>
			</div>
		</div>
	</div>

	<br>
</div>

@endsection
