@extends('layouts.app')

@section('content')
  <br>
  <center>
  <div class="container">
  @if(count($jobs) > 0)
    @foreach($jobs as $job)
    <div class="jumbotron">
      <div class="card">
        <div class="card-title">
          <div class="row">
            <div class="col-sm-2">
              <h1 class="alert alert-success"> Job: </h1>
            </div>
            <div class="col">
              <h1 class="alert alert-info"> {{$job->job_title}} </h1>
            </div>
          </div>
        </div>

        <div class="card-block">
          {!!$job->job_summary!!}
        </div>
        <br>
      </div>
    </div>
    @endforeach
    {{$jobs->links()}}
    @else
    <div class="card-title">
      <p>No current jobs posted.</p>
    </div>
    @endif
</div>
</center>
@endsection
