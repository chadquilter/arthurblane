@extends('layouts.app')

@section('content')
  <br>
  <center>
  <div class="container">
  @if(count($jobs) > 0)
    @foreach($jobs as $job)
    <div class="jumbotron">
      <div class="card">
        <div class="card-title ">

          <div class="row">
    				<div class="col-sm-2 alert alert-primary">
    					<h1><span class="badge badge-secondary">BAM!</span></h1>
    				</div>
    				<div class="col-sm-10 alert alert-success image_display_r">
    					<strong class="display-3"> {{ $job->job_title }} </strong>
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
