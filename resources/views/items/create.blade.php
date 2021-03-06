@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Add Item</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
          @include('inc.dashmenu')
          <hr class="my-1">
          @include('inc.messages')
          <br>
          {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
          <div class="form-group">
            {{Form::label('item_name', 'Item Name:')}}
            {{Form::text('item_name',  '', ['class' => 'form-control', 'placeholder' => 'brick, 2x4 plywood, etc..'])}}
          </div>
          <br>
          <div class="form-group">
            {{Form::label('item_summary', 'Description:')}}
            {{Form::textarea('item_summary', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Item Description'])}}
          </div>
          <br>
          <div class="row">
            @if (count($item_types) > 0)
              <div class="form-group col-md-6">
                {{Form::label('item_type', 'Item Type:')}}
                @if(count($item_types) > 0)
                  {{ Form::select('item_type', $item_types, '', ['class' => 'form-control m-bot15']) }}
                @else
                  <h1>No Types listed! Required field, call for help!:</h1>
                @endif
              </div>
            @endif
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              {{Form::label('item_weight', 'Item Weight:')}}
              {{Form::number('item_weight',  '', ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
            <div class="form-group col-md-6">
              {{Form::label('item_amount', 'Item Cost:')}}
              {{Form::number('item_amount',  '', ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              {{Form::label('item_count', 'Number of Items:')}}
              {{Form::number('item_count',  '', ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
            @if (count($uom) > 0)
              <div class="form-group col-md-6">
                {{Form::label('item_uom', 'Item Unit of Measure:')}}
                @if(count($uom) > 0)
                  {{ Form::select('item_uom', $uom, '', ['class' => 'form-control m-bot15']) }}
                @else
                  <h1>No Types listed! Required field, call for help!:</h1>
                @endif
              </div>
            @endif
          </div>
          <br>
          <h3> Item Options </h3>
          <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#job_option_group">Expand/Collapse Options</button>
          <br> &nbsp
          <div id="job_option_group" class="form-group collapse">
            <div class="form-group">
              {{Form::label('item_online_price', 'Show Online Prices? ')}}
              {{Form::checkbox('item_online_price','1', false, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('item_has_subitems', 'Has Subitems? ')}}
              {{Form::checkbox('item_has_subitems','1', false, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('item_is_oversized', 'Item is Oversized/Needs Cargo area? ')}}
              {{Form::checkbox('item_is_oversized','1', false, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('item_has_image', 'Item Stored Image? ')}}
              {{Form::checkbox('item_has_image','1', false, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('item_has_address', 'Item haas Address? ')}}
              {{Form::checkbox('item_has_address','1', false, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('item_active', 'Item is Active? ')}}
              {{Form::checkbox('item_active','1', true, ['class' => 'form-control'])}}
            </div>
            <br>
          </div>
          <hr class="my-1">
          <div class="page-buttons">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
          <script>
            CKEDITOR.replace( 'article-ckeditor' );
          </script>
        </div>
        <br>
      </div>
    </div>
  </div>
@endsection
