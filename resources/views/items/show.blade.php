@extends('layouts.app')

@section('content')
    <div>
    <a href="/items" class="btn btn-default">Go Back</a>
    @if($item)
        <h1>{{$item->item_name}}</h1>
        <div>
            <p>
                {!!$item->item_summary!!}
            </p>
            <br>&nbsp
            <p>
                {{$item->item_cost}}
            </p>
            <br>
            <p>
                {{$item->item_active}}
            </p>
            <hr>
            <small>Item Created: {{$item->created_at}} </small>
            <hr>
                <a href="/items/{{$item->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}}
                  :<wbr>{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                <br>
              @endif
            @endif
        </div>
    @else
        <div class="alert alert-danger">
            <strong>The Item id used was not found!</strong>
            Please go back to the items listing.
        </div>
    @endif
    <br>
    </div>
@endsection
