<br>
<div class="card image_display_r">
  <div class="card-img-top">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($files as $file)
          @php $active = $loop->index === 0 ? 'active' : ''; @endphp
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class={{$active}}></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach($files as $file)
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/{{$file}}" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
        </div>
        @endforeach
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
