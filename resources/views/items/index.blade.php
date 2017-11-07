@extends('layouts.app')

@section('content')
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Manage Items</div>
                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif
                      <a href="/dashboard" class="btn btn-primary">Back to Dashboard</a>
                      <a href="/items/create" class="btn btn-success">Add Item</a>
                      @if(count($items) > 0)
                      <table class="table table-striped table-hover table-sm table-responsive">
                        <thead class="thead-inverse">
                          <tr>
                              <th nowrap><h3><span class="badge">{{ $items->total() }}</span> Total Items:</h3></th>
                              <th></th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($items as $item)
                          <tr>
                              <td width=80%>
                                <h4> {{$item->item_name}} </h4>
                                <br>
                                <strong> Cost: </strpmg> <span class="badge"> {{$item->item_amount}} </span>
                                <strong> QTY: </strong> <span class="badge"> {{$item->item_count}} </span>
                              </td>
                              <td><a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a></td>
                              <td>
                                {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>
                              {{$items->links()}}
                            </td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
                      @else
                        <p>No Items found</p>
                      @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
