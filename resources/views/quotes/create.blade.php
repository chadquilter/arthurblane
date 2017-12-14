@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <br>
      <div class="col">
        <div class="image_display_r">
          <img class="img-fluid" alt="A scenic home image" src="/images/mdg_images/IMG_BATHROOM2.JPG" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Our work is a cut above the rest!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="image_display_r">
          <img class="img-fluid" alt="A scenic home image" src="/images/CAB1.JPG" style="max-height:100%; width: 100%; display: block;">
          <div class="image_display_text_container">
            <p>Custom Design!</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-2">Feel free </h1> to send us a request for a Quote or any Messages or Questions!
        <br>
        We will be happy to help you in any way we can.
        <br>
        <div class="row">
          <div class="col">
            <strong> Contacts: </strong>
          </div>
          <div class="col">
            <strong> Phone: </strong>
          </div>
          <div class="col">
            <strong> Email: </strong>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <strong> Mike Grounds </strong>
          </div>
          <div class="col">
              <strong>(830)220-2876</strong>
          </div>
          <div class="col">
              <strong>mikegrounds55@cutaboveconstruction55.com</strong>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <strong> Robert Butner </strong>
          </div>
          <div class="col">
              <strong>(830)296-0941</strong>
          </div>
          <div class="col">
              <strong>bobbarrian@arthurblane.com</strong>
          </div>
        </div>


        <br>

        <div class="card mx-auto border border-secondary">
          <div class="card-body">
            @include('inc.messages')
            {!! Form::open(['action' => 'QuotesController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
            <div class="form=group">
              {{Form::label('title', 'Name:')}}
              {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div id="app-6" class="form=group">
              {{Form::label('phone', 'Phone:')}}
              {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
            </div>
            <div class="form=group">
              {{Form::label('email', 'Email:')}}
              {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            <div class="form=group">
              {{Form::label('description', 'Description:')}}
              {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Quote Description'])}}
            </div>
            <br>
            <div class="form=group">
              {{Form::label('notes', 'Notes:')}}
              {{Form::text('notes', '', ['class' => 'form-control', 'placeholder' => 'Additional Notes'])}}
            </div>
            <br>
            <div class="form=group">
              {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
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
    <div class="image_display_r">
      <img class="img-fluid"  alt="A scenic home image" src="/images/LSIDEA.JPG" style="max-height:100%; width: 100%; display: block;">
      <div class="image_display_text_container">
        <p>Custom Design!</p>
      </div>
    </div>
    <br>
  </div>
@endsection
