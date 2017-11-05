@extends('layouts.app')


@section('content')
  <br>
  <div class="well">
    <h1>Add New Address</h1>
    {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
    <div class="form=group">
      {{Form::label('item_summary', 'Description:')}}
      {{Form::textarea('item_summary', $item->item_summary, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Item Description'])}}
    </div>
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
    <div class="page-buttons">
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
  </div>
  <br>
@endsection
