@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Edit Item</h1>
      <div class="card mx-auto">
        <br>
        <div class="card-block">
          <div>
            <a href="/items" class="btn btn-primary"> <<< Back </a>
            <a href="/dashboard" class="btn btn-primary"> <<< Back to Dashboard</a>
            <a href="/jobs/create" class="btn btn-primary">Create Job</a>
            <a href="/quotes" class="btn btn-success">Create Quote</a>
            <a href="/address" class="btn btn-warning">Manage Addresses</a>
            <a href="/items/create" class="btn btn-warning">Create Item</a>
          </div>
          <br>
          {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST']) !!}
          <div class="form=group">
            {{Form::label('item_name', 'Item Name:')}}
            {{Form::text('item_name',  $item->item_name, ['class' => 'form-control', 'placeholder' => 'brick, 2x4 plywood, etc..'])}}
          </div>
          <br>
          <div class="form=group">
            {{Form::label('item_summary', 'Description:')}}
            {{Form::textarea('item_summary', $item->item_summary, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Item Description'])}}
          </div>
          <br>
          <div class="row">
            @if (count($item_types) > 0)
              <div class="form=group col-md-6">
                {{Form::label('item_type', 'Item Type:')}}
                @if(count($item_types) > 0)
                  {{ Form::select('item_type', $item_types, $item->item_type, ['class' => 'form-control m-bot15']) }}
                @else
                  <h1>No Types listed! Required field, call for help!:</h1>
                @endif
              </div>
            @endif
            <div class="form=group col-md-6">
              {{Form::label('item_weight', 'Item Weight:')}}
              {{Form::number('item_weight',  $item->item_weight, ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
            <div class="form=group col-md-6">
              {{Form::label('item_amount', 'Item Cost:')}}
              {{Form::number('item_amount',  $item->item_amount, ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form=group col-md-6">
              {{Form::label('item_count', 'Number of Items:')}}
              {{Form::number('item_count',  $item->item_count, ['class' => 'form-control', 'placeholder' => '0.00', 'step' => 'any'])}}
            </div>
            @if (count($uom) > 0)
              <div class="form=group col-md-6">
                {{Form::label('item_uom', 'Item Unit of Measure:')}}
                @if(count($uom) > 0)
                  {{ Form::select('item_uom', $uom, $item->item_uom, ['class' => 'form-control m-bot15']) }}
                @else
                  <h1>No Types listed! Required field, call for help!:</h1>
                @endif
              </div>
            @endif
          </div>
          <h3> Item Options </h3>
          <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#job_option_group">Expand/Collapse Options</button>
          <br> &nbsp
          <div id="job_option_group" class="form=group collapse">
            <div class="form=group">
              {{Form::label('item_online_price', 'Show Online Prices? ')}}
              {{Form::checkbox('item_online_price','1', $item->item_online_price, ['class' => 'form-control'])}}
            </div>
            <div class="form=group">
              {{Form::label('item_has_subitems', 'Has Subitems? ')}}
              {{Form::checkbox('item_has_subitems','1', $item->item_has_subitems, ['class' => 'form-control'])}}
            </div>
            <div class="form=group">
              {{Form::label('item_is_oversized', 'Item is Oversized/Needs Cargo area? ')}}
              {{Form::checkbox('item_is_oversized','1', $item->item_is_oversized, ['class' => 'form-control'])}}
            </div>
            <div class="form=group">
              {{Form::label('item_has_image', 'Item Stored Image? ')}}
              {{Form::checkbox('item_has_image','1', $item->item_has_image, ['class' => 'form-control'])}}
            </div>
            <div class="form=group">
              {{Form::label('item_has_address', 'Item haas Address? ')}}
              {{Form::checkbox('item_has_address','1', $item->item_has_address, ['class' => 'form-control'])}}
            </div>
            <div class="form=group">
              {{Form::label('item_active', 'Item is Active? ')}}
              {{Form::checkbox('item_active','1', $item->item_active, ['class' => 'form-control'])}}
            </div>
          </div>
          <br>
          <hr class="my-1">
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
      </div>
    </div>
  </div>
@endsection
