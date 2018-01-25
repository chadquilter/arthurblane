@extends('layouts.front')

@section('content')
  <div class="container">
    <br>
    @include('inc.pagelabel')
    <br>
    <div class="card">
      <div class="card-img-top">




        <div data-ride="carousel" class="carousel carousel-fade" id="carousel-example-captions">
            <ol class="carousel-indicators">
              <li class="active" data-slide-to="0" data-target="#carousel-example-captions"></li>
              <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
              <li data-slide-to="2" data-target="#carousel-example-captions" class=""></li>
            </ol>
            <div role="listbox" class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control">
              <span aria-hidden="true" class="icon-prev"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control">
              <span aria-hidden="true" class="icon-next"></span>
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
