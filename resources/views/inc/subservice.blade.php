  @if(count($mdg_services) > 0)
    <div class="card image_display_r">
      <div class="card-body">
        @foreach($mdg_services as $mdg_service)
          <div class="alert alert-success" role="alert">{{ $mdg_service }}</div>
        @endforeach
      </div>
    </div>
  @else
    Our services listing are currently under construction!
  @endif
