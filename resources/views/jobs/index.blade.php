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
      <div class="jumbotron">
          <div class="row">
            <div class="col">
              <center>
                {{$jobs->links()}}
              </center>
            </div>
          </div>

        <div class="card">
          <div class="card-title ">
            @include('inc.pagelabel')
          </div>
          <div class="card-block">
            {!!$job->job_summary!!}
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
        </div>
        <center>
          <br>
          {{$jobs->links()}}
        </center>
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
