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
      <div class="col-md-8">
        <div class="image_display_r">
          <img class="img-fluid"  alt="A scenic home image" src="/images/mdg_images/IMG_STAIR_WELL2.JPG" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Custom Design!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="jumbotron">
          <p class="lead">
            <strong class="display-5"> {{ config('app.name', 'MDG')  }} </strong>
            <br> has helped thousands of happy homeowners across Texas build the new custom-designed home of their dreams.
            We build "eco-friendly" green custom homes of all sizes for all budgets.
            <br>
            <br>
            <strong>Whatever</strong> custom home you have in mind, from a quaint cottage in Austin,
            a rambling farm house in the Hill Country or an elegant luxury estate home in Houston, Dallas or San Antonio, we can build, repair, or add to it at an affordable price.
          </p>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <div class="image_display_r">
          <img class="img-fluid" alt="A scenic home image" src="/images/dusk-home1.jpg" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Custom Outdoor Walkways!</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="image_display_r">
          <img class="img-fluid" alt="A scenic home image" src="/images/home-renovation.jpg" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Custom Rock!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
