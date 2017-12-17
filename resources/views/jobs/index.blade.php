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
      <div class="card">
        <div class="card-title ">
          @include('inc.pagelabel')
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
