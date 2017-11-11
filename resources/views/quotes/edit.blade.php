@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Edit Quote</h1>
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
            <a href="/items" class="btn btn-warning">Manage Items</a>
            <a href="/address" class="btn btn-warning">Manage Addresses</a>
          </div>
          <hr class="my-1">
          @include('inc.messages')
          <br>
          {!! Form::open(['action' => ['QuotesController@update', $quote->id], 'method' => 'POST']) !!}
          <div class="form=group">
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', $quote->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
          </div>
          <div id="app-6" class="form=group">
            {{Form::label('phone', 'Phone:')}}
            {{Form::text('phone', $quote->phone, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
          </div>
          <div class="form=group">
            {{Form::label('email', 'Email:')}}
            {{Form::text('email', $quote->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
          </div>
          <div class="form=group">
            {{Form::label('description', 'description:')}}
            {{Form::textarea('description', $quote->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Quote Description'])}}
          </div>
          <div class="form=group">
            {{Form::label('notes', 'Notes:')}}
            {{Form::text('notes', $quote->notes, ['class' => 'form-control', 'placeholder' => 'Additional Notes'])}}
          </div>
          <br>
          <div class="form=group">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
          <script>
          CKEDITOR.replace( 'article-ckeditor' );
          </script>
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
