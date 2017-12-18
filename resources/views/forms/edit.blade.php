@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Edit Address</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
          <div class="btn-group" role="group" aria-label="links">
            <a href="/dashboard" class="btn btn-primary">Back to Dashboard</a>
            <a href="/address" class="btn btn-primary">Manage Addresses</a>
          </div>
          <div class="btn-group" role="group" aria-label="links">
            <a href="/jobs/create" class="btn btn-success">Create Job</a>
            <a href="/quotes" class="btn btn-success">Create Quote</a>
          </div>
          <div class="btn-group" role="group" aria-label="links">
            <a href="/items" class="btn btn-warning">Manage Items</a>
            <a href="/address/create" class="btn btn-warning">Create Addresses</a>
          </div>
          <hr class="my-1">
          @include('inc.messages')
          <br>
          {!! Form::open(['action' => ['FormsController@update', $form->id], 'method' => 'POST']) !!}
          <div class="form=group">
            {{Form::label('form_title', 'Title:')}}
            {{Form::text('form_title', '', ['class' => 'form-control', 'placeholder' => 'Form Title'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_date', 'Date: ')}}
            {{Form::text('form_date', '', ['class' => 'form-control', 'placeholder' => 'Form Date'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_body', 'Form Body:')}}
            {{Form::text('form_body', '', ['class' => 'form-control', 'placeholder' => 'Form Body'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_active', 'Form Active? ')}}
            {{Form::checkbox('form_active','1', ['class' => 'form-control'])}}
          </div>
          <br>
          <div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
