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
            <div class="col-sm-4 alert alert-success">
              <strong class="display-4"> Job: </strong>
            </div>
            <div class="col-sm-8 alert alert-info">
              <strong class="display-4"> {{$job->job_title}} </strong>
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
