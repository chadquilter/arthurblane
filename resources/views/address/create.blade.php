@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron border border-secondary">
      <h1 class="display-3">Add New Address</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
          <div class="btn-group" role="group" aria-label="links">
            <a href="/dashboard" class="btn btn-primary">Back to Dashboard</a>
          </div>
          <div class="btn-group" role="group" aria-label="links">
            <a href="/jobs/create" class="btn btn-success">Create Job</a>
            <a href="/quotes" class="btn btn-success">Create Quote</a>
          </div>
          <div class="btn-group" role="group" aria-label="links">
            <a href="/address" class="btn btn-warning">Manage Addresses</a>
            <a href="/items" classs="btn btn-warning">Manage Items</a>
          </div>
          <hr class="my-1">
          @include('inc.messages')
          <br>
          {!! Form::open(['action' => 'AddressController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
          <div class="form=group">
            {{Form::label('address1', 'Address 1:')}}
            {{Form::text('address1', '', ['class' => 'form-control', 'placeholder' => 'Address 1'])}}
          </div>
          <div class="form=group">
            {{Form::label('address2', 'Address 2:')}}
            {{Form::text('address2', '', ['class' => 'form-control', 'placeholder' => 'Address 2'])}}
          </div>
          <div class="form=group">
            {{Form::label('city', 'City: ')}}
            {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City/Town'])}}
          </div>
          <div class="form=group">
            {{Form::label('state', 'State: ')}}
            {{Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State'])}}
          </div>
          <div class="form=group">
            {{Form::label('zipcode', 'Zip Code: ')}}
            {{Form::text('zipcode', '', ['class' => 'form-control', 'placeholder' => 'Zip Code'])}}
          </div>
          <div class="form=group">
            {{Form::label('Active', 'Address Active? ')}}
            {{Form::checkbox('active','1', ['class' => 'form-control'])}}
          </div>
          <br>
          <div class="page-buttons">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
          </div>
          {!! Form::close() !!}
        </div>
        <br>
      </div>
    </div>
  </div>
@endsection
