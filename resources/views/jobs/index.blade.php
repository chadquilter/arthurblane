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
            <div class="col-sm-4">
              <div class="alert alert-success"> Job: </div>
            </div>
            <div class="col-sm-8">
              <div class="alert alert-info"> {{$job->job_title}} </div>
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
