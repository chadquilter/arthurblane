@extends('layouts.app')

@section('content')
  <br>
  <center>
    <div class="container">
      @if(count($jobs) > 0)
        @foreach($jobs as $job)
          @php
            $title = $job->job_title;
            $jdir = 'job'.$job->job_id.'/';
            $files = Storage::disk('images')->files($jdir);
          @endphp
          @include('inc.pagelabel')
          <div class="card bg-secondary border border-dark rounded">
            <div class="card-body">

              <div class="row">
                <div class="col image_display_r">
                  <center>
                    {{$jobs->links()}}
                  </center>
                </div>
              </div>
              <div class="card image_display_r">
                <div class="card-body">
                  <p class="lead"> <strong class="display-4">Services Provided:</strong></p>
                  {!! Form::open() !!}
                  <div id="job_service_group" class="form=group">
                    <div class="alert alert-info" role="info">
                      <div class="card image_display_r border border-secondary rounded shadow_only">
                        <div class="card-body">
                          <div class="list-group">
                            @if(count($mdg_services) > 0)
                              @foreach($mdg_services as $mdg_record)
                                @php
                                  $has_service = App\Job::find($job->job_id)->services()->where('service_id', $mdg_record->id)->first();
                                @endphp
                                @if ($has_service != '')
                                  <a href="/{{$mdg_record->service_url}}" class="list-group-item list-group-item-action">{{ $mdg_record->service_name }}</a>
                                @endif
                              @endforeach
                            @else
                              <h1>No Types Listed!</h1>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="card image_display_r">
                <div class="card-body">
                  <p class="lead">{!! $job->job_summary !!}</p>
                </div>
              </div>
              <br>
              <div class="card image_display_r">
                <div class="card-img-top">
                  @include('inc.jobimagecarosel')
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  {{$jobs->links()}}
                </div>
              </div>
            </div>
        </div>
      @endforeach
    @else
      <div class="card-title">
        <p>No current jobs posted.</p>
      </div>
    @endif
  </div>
</center>
<br>
@endsection
