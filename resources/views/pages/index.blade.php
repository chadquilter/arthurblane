@extends('layouts.front')

@section('content')
  <div class="container">
    <br>
    @include('inc.pagelabel')
    <br>

    <div class="card image_display_r">
      <div class="card-img-top">
        <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          </ol>
          <div class="carousel-inner embed-responsive embed-responsive-4by5" role="listbox">
            <div class="carousel-item embed-responsive-item active">
              <img src="/images/mdg_images/IMG_00111.jpg" class="img-fluid" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img src="/images/job2/show_frame_front.jpg" class="img-fluid" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/dusk-home.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/job2/show_frame_side.jpg" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/LSIDE.JPG" alt="House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/ARCH4.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/kitchenbath/shower_tile4.jpg" alt="House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/job4/front.png" alt="House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower">
            </div>
            <div class="carousel-item embed-responsive-item">
              <img class="img-fluid" src="/images/job4/back_porch.png" alt="House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <div class="card-title">
            <p>Our work is a cut above the rest!</p>
          </div>
        </div>
      </div>
    </div>
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
