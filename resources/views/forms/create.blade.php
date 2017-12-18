@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">New Form</h1>
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
            <a href="/items" class="btn btn-warning">Manage Items</a>
          </div>
          <hr class="my-1">
          @include('inc.messages')
          <br>
          <div class="form=group">
            {{Form::label('form_date', 'Date: ')}}
            {{Form::date('form_date', \Carbon\Carbon::now()), ['class' => 'form-control'] }}
          </div>
          <br>
          {!! Form::open(['action' => 'FormsController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
          <div class="form=group">
            {{Form::label('form_title', 'Title:')}}
            {{Form::text('form_title', '', ['class' => 'form-control', 'placeholder' => 'Form Title'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_body', 'Form Body:')}}
            {{Form::textarea('form_body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Form Body'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_active', 'Form Active? ')}}
            {{Form::checkbox('form_active','1', ['class' => 'form-control'])}}
          </div>
          <br>
          <div class="page-buttons">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
        </div>
        <br>
      </div>
    </div>
  </div>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection
