@extends('layouts.front')

@section('content')
<br>
<div class="container">
			@include('inc.pagelabel')
			<div class="card image_display_r">
	  			<img class="card-img-top" src="/images/mdg_images/IMG_BEDROOM1.JPG" alt="Card image cap">
	  			<div class="card-body">
	    			<h5 class="card-title">Customized Bath and Shower!</h5>
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
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/CustomShower.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Designed Shower!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/mdg_images/IMG_BATHROOM1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Full Bath!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/kitchenbath/vanity1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Bath Counter!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/kitchenbath/counter1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Vanity!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/kitchenbath/shower_tile1.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom Designed Shower!</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card image_display_r">
					<img class="card-img-top" alt="A scenic home image" src="/images/kitchenbath/shower_tile3.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
					<div class="image_display_text_container">
						<p>Custom tile!</p>
					</div>
				</div>
			</div>
		</div>

		<br>
	</div>
</div>
@endsection
