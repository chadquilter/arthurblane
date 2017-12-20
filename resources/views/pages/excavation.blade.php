@extends('layouts.front')

@section('content')
<br>
<div class="container">
	@include('inc.pagelabel')
	<div class="card image_display_r">

		<img class="card-img-top" src="/images/2_orig.jpg" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Custom Excivation Work before!</h5>
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
			<div class="row">
				<div class="col">
					<div class="card image_display_r">
						<img class="card-img-top" alt="A scenic home image" src="/images/4_orig.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
						<div class="card-body">
							<div class="card-title">
								<p>...and After!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<div class="col">
						<div class="card image_display_r">
							<img class="card-img-top" alt="A scenic home image" src="/images/excavation/excavation3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
							<div class="card-body">
								<div class="card-title">
									<p>We can handle most of your excavation needs...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>



	<div class="row">
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/excavation/excavation1.png" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>...for Leveling and Foundationss for new home development....</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card image_display_r">
				<img class="card-img-top" alt="A scenic home image" src="/images/excavation/excavation2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
				<div class="card-body">
					<div class="card-title">
						<p>...to clearing old structures or for water diversion!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
</div>
@endsection
