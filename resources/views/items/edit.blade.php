@extends('layouts.app')

@section('content')
  <br>
  <div class="well">
    <a href="/items" class="btn btn-primary">Back to Item Manager</a>
    <br>
    <h1>Edit Item</h1>
    {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST']) !!}
    <div class="form=group">
        {{Form::label('item_name', 'Item Name:')}}
        {{Form::text('item_name',  $item->item_name, ['class' => 'form-control', 'placeholder' => 'brick, 2x4 plywood, etc..'])}}
    </div>
    <div class="form=group">
      {{Form::label('item_summary', 'Description:')}}
      {{Form::textarea('item_summary', $item->item_summary, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Item Description'])}}
    </div>
    @if (count($item_types) > 0)
      <div class="form=group">
        {{Form::label('item_type', 'Item Type:')}}
        @if(count($item_types) > 0)
          {{ Form::select('item_type', $item_types, '', ['class' => 'form-control m-bot15']) }}
        @else
          <h1>No Types listed! Required field, call for help!:</h1>
        @endif
      </div>
    @endif
    <div class="form=group">
        {{Form::label('item_weight', 'Item Weight:')}}
        {{Form::text('item_weight',  $item->item_weight, ['class' => 'form-control', 'placeholder' => '0.00'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_amount', 'Item Cost:')}}
        {{Form::text('item_amount',  $item->item_amount, ['class' => 'form-control', 'placeholder' => '0.00'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_count', 'Number of Items on hand:')}}
        {{Form::text('item_count',  $item->item_count, ['class' => 'form-control', 'placeholder' => '0.00'])}}
    </div>
    @if (count($uom) > 0)
      <div class="form=group">
        {{Form::label('item_uom', 'Item Unit of Measure:')}}
        @if(count($uom) > 0)
          {{ Form::select('item_uom', $uom, '', ['class' => 'form-control m-bot15']) }}
        @else
          <h1>No Types listed! Required field, call for help!:</h1>
        @endif
      </div>
    @endif
    <div class="form=group">
        {{Form::label('item_online_price', 'Show Online Prices? ')}}
        {{Form::checkbox('item_online_price','1', ['class' => 'form-control'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_has_subitems', 'Has Subitems? ')}}
        {{Form::checkbox('item_has_subitems','1', ['class' => 'form-control'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_is_oversized', 'Item is Oversized/Needs Cargo area? ')}}
        {{Form::checkbox('item_is_oversized','1', ['class' => 'form-control'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_has_image', 'Item Stored Image? ')}}
        {{Form::checkbox('item_has_image','1', ['class' => 'form-control'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_has_address', 'Item haas Address? ')}}
        {{Form::checkbox('item_has_address','1', ['class' => 'form-control'])}}
    </div>
    <div class="form=group">
        {{Form::label('item_active', 'Item is Active? ')}}
        {{Form::checkbox('item_active','1', ['class' => 'form-control'])}}
    </div>
    <br>
    <div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
  </div>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
  <br>
@endsection
