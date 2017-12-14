@extends('layouts.front')

@section('content')

  <div class="container">
    <br>
    <div class="image_display_r">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/dusk-home.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/LSIDEA.JPG" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/LSIDE.JPG" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/ARCH4.JPG" alt="Third slide">
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
      <div class="image_display_text_container">
        <p>Our work is a cut above the rest!</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <div class="image_display_r">
          <img class="img-fluid"  alt="A scenic home image" src="/images/mdg_images/IMG_STAIR_WELL2.JPG" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Custom Metal Work!</p>
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
            With over 10 years of building experience based in the center of Texas, you can be rest assured that our work is a cut above the rest!
            Contact us to day to recieve a free Quote!
          </p>
        </div>
      </div>
      <div class="col">
        <div class="jumbotron">
          <p class="lead">
            <strong class="display-4"> {{ config('app.name', 'MDG')  }} </strong>
            <br> has helped thousands of happy homeowners across Texas build the new custom-designed home of their dreams.
            We build "eco-friendly" green custom homes of all sizes for all budgets.
          </p>
        </div>
        <div class="image_display_r">
          <img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_00111.jpg" style="max-height:50%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Stair Wells, Frames, Railing and so much more!</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="image_display_r">
			<img class="img-fluid" alt="A scenic home image" src="/images/3_orig.jpg" style="max-height:100%; width: 100%; display: block;">
			<div class="image_display_text_container">
				<p>Custom Driveways and Concrete Pads!</p>
			</div>
		</div>
  </div>
  <br>
@endsection
