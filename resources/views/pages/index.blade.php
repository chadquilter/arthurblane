@extends('layouts.front')

@section('content')
  <div class="container">
    <br>
    @include('inc.pagelabel')
    <br>

    <div id="carousel-fade" class="carousel carousel-fade" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-fade" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-fade" data-slide-to="1"></li>
            <li data-target="#carousel-fade" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner embed-responsive embed-responsive-16by9" role="listbox">
          <div class="carousel-item embed-responsive-item active">
            <img src="http://via.placeholder.com/1600x900/483D8B/ffffff?text=Slide%201" alt="First slide image" class="img-fluid">
            <div class="carousel-caption">
              <h3>First slide Heading</h3>
              <p>First slide Caption</p>
            </div>
          </div>

          <div class="carousel-item embed-responsive-item">
            <img src="http://via.placeholder.com/1600x900/9400D3/ffffff?text=Slide%202" alt="Second slide image" class="img-fluid">
            <div class="carousel-caption">
              <h3>Second slide Heading</h3>
              <p>Second slide Caption</p>
            </div>
          </div>

          <div class="carousel-item embed-responsive-item">
            <img src="http://via.placeholder.com/1600x900/FF1493/ffffff?text=Slide%203" alt="Third slide image" class="img-fluid">
            <div class="carousel-caption">
              <h3>Third slide Heading</h3>
              <p>Third slide Caption</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carousel-fade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-fade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>





    <br>
    <div class="row">
      <div class="col">
        <div class="card image_display_r">
          <img class="card-img-top" src="/images/mdg_images/IMG_STAIR_WELL2.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <p class="card-title">Custom Metal Work!</p>
          </div>
        </div>
        <br>
        <div class="jumbotron">
          <p class="lead">
            <strong class="display-4">Whatever Custom Home </strong> you have in mind, from a quaint cottage in Austin,
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
            <span class="display-4"> {{ config('app.name', 'MDG')  }} </span>
            <br> has helped numerous happy homeowners across Texas build the new custom-designed home of their dreams.
            We build "eco-friendly" green custom homes of all sizes for all budgets.
          </p>
        </div>
        <div class="card image_display_r">
          <img class="card-img-top" src="/images/excavation/excavation2.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <p class="card-title">Build the Custom home you want!</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="card image_display_r">
      <img class="card-img-top" src="/images/3_orig.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
      <div class="card-body">
        <p class="card-title">Custom Driveways and Concrete Pads!</p>
      </div>
    </div>
  </div>
  <br>
@endsection
