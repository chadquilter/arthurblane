@extends('layouts.app')

@section('content')
  <br>
  <div>
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="well">
                <h3><a href="/items/{{$item->id}}"> {{$item->item_name}} </a> </h3>
                <br>&nbsp
                <div id="web_space">
                    {!!$item->item_summary!!}
                    <center>
                        &nbsp</br>
                        <hr>
                        <small>Item Listing: {{$item->created_at}} </small>
                    </center>
                </div>
            </div>
        @endforeach
        {{$items->links()}}
    @else
        <p>No Items found</p>
    @endif
  </div>
@endsection
