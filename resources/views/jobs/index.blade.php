@extends('layouts.app')

@section('content')
  <br>
  <center>
    <div class="container">
      @if(count($jobs) > 0)
        @foreach($jobs as $job)
          @php
          $title = $job->job_title
          @endphp
          <br>
          @include('inc.pagelabel')
          <div class="card bg-info border border-dark rounded">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <center>
                    {{$jobs->links()}}
                  </center>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <p class="lead"> <strong class="display-4">Services Provided:</strong></p>
                  {!! Form::open() !!}
                  <div id="job_service_group" class="form=group">
                    <div class="alert alert-info" role="alert">
                      <div class="row">
                        @if(count($mdg_services) > 0)

                          @foreach($mdg_services as $mdg_id => $mdg_name)
                            @php
                            $has_service = App\Job::find($job->job_id)->services()->where('service_id', $mdg_id)->first();
                            $job_service_checked = count($has_service) > 0 ? 'true' : '';
                            @endphp
                            @if ($job_service_checked != '')
                              <div class="col-4 mx-auto">
                                <div class="card image_display_r border border-secondary rounded shadow_only">
                                  <div class="card-title">
                                    {{Form::label('serviceID[]', $mdg_name)}} {{Form::checkbox('serviceID[]', '', $job_service_checked, ['class' => 'form-control', 'disabled' => 'true' ])}}
                                  </div>
                                </div>
                              </div>
                            @endif
                          @endforeach

                        @else
                          <h1>No Types Listed!</h1>
                        @endif
                      </div>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
                <div class="card">
                  <div class="card-body">
                    <p class="lead">{!! $job->job_summary !!}</p>
                  </div>
                </div>
                @php
                $jdir = 'job'.$job->job_id.'/';
                $files = Storage::disk('images')->files($jdir);
                @endphp
                <div class="card image_display_r">
                  <div class="card-img-top">
                    @include('inc.jobimagecarosel')
                  </div>
                </div>
              </div>
              <br>
              {{$jobs->links()}}
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
@endsection
