@extends('layouts.app')

@section('content')
  <br>
  <center>
  <div>
    @if(count($jobs) > 0)
        @foreach($jobs as $job)
            <div class="container">
              <div class="jumbotron">
              <div id="card">
                <div class="card">
                	<div class="card-title row">
                    <div class="col-sm-3">
                      <h1 class="card-title alert alert-success"> JOB </h1>
                    </div>
                    <div class="col-lg-1">
                      <h1 class="card-title"> {{$job->job_title}} </h1>

                	<div class="card-block image_display_r">
                    {!!$job->job_summary!!}
                  </div>
                </div>
                </div>
                </div>
              </div>
            </div>
            </div>
            <br>
        @endforeach
        {{$jobs->links()}}
    @else
      <div class="well">
        <p>No current jobs posted.</p>
      </div>
    @endif
  </div>
</center>
@endsection
