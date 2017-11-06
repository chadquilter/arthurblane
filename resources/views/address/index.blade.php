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

                      @if(count($addresses) > 0)
                      <table class="table table-striped table-hover table-sm table-responsive">
                          <thead class="thead-inverse">
                          <tr>
                              <th nowrap><h3><span class="badge">{{ $addresses->total() }}</span> Saved Addresses:</h3></th>
                              <th></th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($addresses as $address)
                          <tr>
                              <td width=80%><strong>Address: </strong>
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
                              </td>
                              <td><a href="/address/{{$address->id}}/edit" class="btn btn-default">Edit</a></td>
                              <td>
                                {!!Form::open(['action' => ['AddressController@destroy', $address->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
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
                      @endif

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
