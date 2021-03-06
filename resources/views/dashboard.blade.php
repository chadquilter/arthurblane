@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h4 class="display-4">Dashboard </h4>

    <div class="card mx-auto">
      <br>
      <div class="card-body">
        <p class="lead"><strong> Welcome {{ Auth::user()->name }}</strong></p>
        <p class="lead"><strong> {{ $dt }} </strong></p>
        @include('inc.dashmenu')
        <hr class="my-1">
        @include('inc.messages')
        <br>
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        @if(count($jobs) > 0)
            <div id="jobs_div" name="jobs_div" class="container border border-secondary rounded shadow_only">
              <p class="lead"><h4 class="display-4"><span class="badge badge-secondary">{{ $jobs->total() }}</span> Job Entries:</h4></p>
              <hr class="my-4">
              @foreach($jobs as $job)
                <div class="row">
                  <div class="col-12 col-md-8">
                    <p class="lead"><strong>Job: </strong>{{$job->job_title}}</p>
                  </div>
                  <div class="col col-md-4 btn-group" role="group" aria-label="Job List">

                    <a href="/jobs/{{$job->job_id}}/edit" class="btn btn-primary">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#jobModal{{$job->job_id}}">Delete</button>
                    <!-- Modal -->
                    <div class="modal fade" id="jobModal{{$job->job_id}}" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel{{$job->job_id}}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="jobModalLabel{{$job->job_id}}">Delete Job!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="lead">Are you sure you wish to delete this Job?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {!!Form::open(['action' => ['JobsController@destroy', $job->job_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                          </div>
                        </div>
                      </div>
                    </div>
                    <!---end---->

                  </div>
                </div>
                <hr class="my-1">
              @endforeach
              <br>
              <div class="row">
                <div class="col-12 col-md-8">
                  {{$jobs->links()}}
                </div>
              </div>
            </div>
            <br>
        @endif
        @if(count($quotes) > 0)
              <div id="quotes_div" name="quotes_div" class="container border border-secondary rounded shadow_only">
                <p class="lead"><h4 class="display-4"><span class="badge badge-secondary">{{ $quotes->total() }}</span> Quote Entries:</h4><p>
                <hr class="my-4">
              @foreach($quotes as $quote)
                <div class="row">
                  <div class="col-12 col-md-8">
                    <p class="lead"><strong>Quote: </strong>{{$quote->title}}</p>
                  </div>
                  <div class="col col-md-4 btn-group" role="group" aria-label="Job List">

                    <a href="/quotes/{{$quote->id}}/edit" class="btn btn-primary">Edit</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#quoteModal{{$quote->id}}">Delete</button>
                    <!-- Modal -->
                    <div class="modal fade" id="quoteModal{{$quote->id}}" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel{{$quote->id}}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel{{$quote->id}}">Delete Quote!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="lead">Are you sure you wish to delete this Quote?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {!!Form::open(['action' => ['QuotesController@destroy', $quote->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                          </div>
                        </div>
                      </div>
                    </div>
                    <!---end---->

                  </div>
                </div>
                <hr class="my-1">
              @endforeach
              <br>
              <div class="row">
                <div class="col-12 col-md-8">
                  {{$quotes->links()}}
                </div>
              </div>
            </div>
        @endif
        <br>
        @if(count($addresses) > 0)
          <div id="quotes_div" name="quotes_div" class="container border rounded shadow_only">
          <table class="table table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th nowrap><h3><span class="badge badge-secondary">{{ $addresses->total() }}</span> Saved Addresses:</h3></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($addresses as $address)
                <tr>
                  <td><strong>Address: </strong>
                    <div class=row>
                      <div class="col-md-4">
                        <br> {{$address->address1}}
                        <br> {{$address->city}} , {{$address->state}}
                        <br> {{$address->zipcode}}
                      </div>
                      <div class="col-md-8">
                        <div class="mapouter">
                          <div class="gmap_canvas">
                            <iframe width="200" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q={{$address->address1}},{{$address->city}},{{$address->state}},{{$address->zipcode}}=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          </div>
                          <style>.mapouter{overflow:hidden;height:200px;width:200px;}.gmap_canvas {background:none!important;height:200px;width:200px;}</style>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td width=5%><a href="/address/{{$address->id}}/edit" class="btn btn-primary">Edit</a></td>
                  <td width=5%>
                    {!!Form::open(['action' => ['AddressController@destroy', $address->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <td>{{$addresses->links()}}</td>
                <td></td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
