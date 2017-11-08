@extends('layouts.app')

@section('content')
  <div class="container">
  <div class="card mx-auto">
    <br>
    <h1 class="card-title">Dashboard</h1>
    <div class="card-block">
      @if (session('status'))
      <div class="alert alert-success">
            {{ session('status') }}
      </div>
      @endif
      <div>
        <a href="/jobs/create" class="btn btn-primary">Create Job</a>
        <a href="/quotes" class="btn btn-success">Create Quote</a>
        <a href="/address" class="btn btn-warning">Manage Addresses</a>
        <a href="/items" class="btn btn-warning">Manage Items</a>
        <br>
      </div>

                      @if(count($items) > 0)
                      <table class="table table-striped table-hover table-responsive">
                        <thead class="thead-inverse">
                          <tr>
                              <th nowrap><h3><span class="badge badge-secondary">{{ $items->total() }}</span> Total Items:</h3></th>
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
                              <td width=10%><a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a></td>
                              <td width=10%>
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
@endsection
