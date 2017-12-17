@extends('layouts.app')

@section('content')
  <br>
  <center>
  <div class="container">
  @if(count($jobs) > 0)
    @foreach($jobs as $job)
      {{ $title = $job->job_title }}
    <div class="jumbotron">
      <div class="card">
        <div class="card-title ">

          @include('inc.pagelabel')


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
