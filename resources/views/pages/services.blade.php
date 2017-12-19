@extends('layouts.front')

@section('content')
	<br>
	<div class="container">
		@include('inc.pagelabel')
		<div class="card image_display_r">
			<img class="card-img-top" src="/images/2_orig.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
			<div class="card-body">
				<h5 class="card-title">Professional Excivation and Stonework!</h5>
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
								@foreach($mdg_services as $mdg_id)

									<a class="alert alert-primary btn btn-lg btn-block" role="button" href="/{{ $mdg_id->service_url }}">{{ $mdg_id->service_name }}</a>

								@endforeach
						@else
							Our services listing are currently under construction!
						@endif
					</p>
					<hr class="my-4">
				</div>
			</div>
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Kitchen Cupboards!</p>
					</div>
				</div>
				<br>
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/Cub1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Kitchen Cupboards!</p>
					</div>
				</div>
				<br>

			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Sink and Counter Space!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/IMG_BEDROOM1A.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Ceiling and Molding!</p>
					</div>
				</div>
			</div>
		</div>


		<br>
		<div class="row">
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/steel/steel_barn4.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="card-body">
						<div class="card-title">
							<p>Custom Steel Barn Interior! </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col">

				<div class="card image_display_r">
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
			<img class="card-img-top" alt="A scenic home image" src="/images/homes/home3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
			<div class="card-body">
				<div class="card-title">
					<p>Custom Homes done Right!</p>
				</div>
			</div>
		</div>

		<br>



	</div>
@endsection
