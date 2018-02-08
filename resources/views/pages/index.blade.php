@extends('layouts.front')

@section('content')
  <div class="container">
    <br>
    @include('inc.pagelabel')
    <br>
    <div class="card bg-secondary border border-dark rounded image_display_r">
      <div class="card-img-top">
        @include('inc.jobimagecarosel')
      </div>
    </div>
    <br>
  <div class="card bg-secondary border border-dark rounded image_display_r">
    <div class="card-body">
    <div class="row">
      <div class="col">
        <div class="card border border-dark rounded image_display_r">
          <img class="card-img-top" src="/images/mdg_images/IMG_STAIR_WELL2.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <p class="card-title lead">Custom Metal Work!</p>
          </div>
        </div>
        <br>
        <div class="jumbotron">
          <p class="lead">
            <strong class="display-3">W</strong>hatever Custom Home you have in mind, from a quaint cottage in Austin,
            to a rambling farm house in the Hill Country or an elegant luxury estate home in Houston, Dallas or San Antonio,
            we can build, repair, or add to it at an affordable price.
          </p>
          <p class="lead">
            With over 15 years of building experience based in the Texas Hill Country, you can be rest assured that our work is a cut above the rest!
          </p>
          <p class="lead">
            Contact us today to recieve a <a href="/quotes">Free Quote!</a>
          </p>
        </div>
      </div>
      <div class="col">
        <div class="jumbotron">
          <p class="lead">
            <b>{{ config('app.name', 'MDG')  }}</b>
            has helped numerous happy homeowners across Texas build the new custom-designed home of their dreams.
            We build "eco-friendly" green custom homes of all sizes for all budgets.
          </p>
        </div>
        <div class="card border border-dark rounded image_display_r">
          <img class="card-img-top" src="/images/excavation/excavation2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <p class="card-title lead">Build the Custom home you want!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <br>
    <div class="card border border-dark rounded image_display_r">
      <img class="card-img-top" src="/images/3_orig.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
      <div class="card-body">
        <p class="card-title lead">Custom Driveways and Concrete Pads!</p>
      </div>
    </div>
  </div>
  <br>
@endsection
