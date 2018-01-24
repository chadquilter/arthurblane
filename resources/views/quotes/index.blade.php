@extends('layouts.app')

@section('content')
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Manage Address's</div>

                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      <a href="/dashboard" class="btn btn-primary">Back to Dashboard</a>
                      <a href="/address/create" class="btn btn-success">Add Adress</a>

                      @if(count($quotes) > 0)
                      <table class="table table-striped table-hover table-sm table-responsive">
                          <thead class="thead-inverse">
                          <tr>
                              <th nowrap><h3><span class="badge">{{ $quotes->total() }}</span> Quote Entries:</h3></th>
                              <th></th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($quotes as $quote)
                          <tr>
                              <td width=80%><strong>Quote: </strong> {{$quote->title}}</td>
                              <td><a href="/quotes/{{$quote->id}}/edit" class="btn btn-default">Edit</a></td>
                              <td>
                                {!!Form::open(['action' => ['QuotesController@destroy', $quote->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>{{$quotes->links()}}</td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
                      @endif

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
