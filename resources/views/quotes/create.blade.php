@extends('layouts.app')


@section('content')
  <div class="container">
    @include('inc.pagelabel')
    <div class="row">
      <br>
      <div class="col">
        <div class="card image_display_r">
          <img class="card-img-top" src="/images/mdg_images/IMG_BATHROOM2.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <div class="card-title">
              <p>A cut above the rest!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card image_display_r">
          <img class="card-img-top" src="/images/CAB1.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
          <div class="card-body">
            <div class="card-title">
              <p>Custom Design!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-2">Feel Free ...</h1> to send us a request for a Quote, Message or any Questions!
        <br>
        <br>

        <div class="row">
          <div class="col">
            <strong> Contacts: </strong>
          </div>
        </div>
        <hr class="my-4">
        
        <div class="row">
          <div class="col">
            <div class="card border border-secondary">
              <div class="card-body">
                <div class="card-title">
                  <div class="row">
                    <div class="col">
                      <strong> Name: </strong>
                    </div>
                    <div class="col">
                      <strong> Mike Grounds </strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <strong> Phone: </strong>
                    </div>
                    <div class="col">
                      <strong> (830)220-2876</strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <strong> Email: </strong>
                    </div>
                    <div class="col">
                      <strong> mikegrounds@bamconstruction.net </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border border-secondary">
              <div class="card-body">
                <div class="card-title">
                  <div class="row">
                    <div class="col">
                      <strong>Name: </strong>
                    </div>
                    <div class="col">
                      <strong>Robert Burtner</strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <strong>Phone: </strong>
                    </div>
                    <div class="col">
                      <strong>(830)265-0941</strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <strong>Email: </strong>
                    </div>
                    <div class="col">
                      <strong> robertburtner@bamconstruction.net </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <br>
        <div class="row">
          <div class="col">
            <strong> Send Message or Request Quote:</strong>
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
    <div class="card image_display_r">
      <img class="card-img-top" src="/images/LSIDEA.JPG" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
      <div class="card-body">
        <div class="card-title">
          <p>Custom Design!</p>
        </div>
      </div>
    </div>
    <br>
  </div>
@endsection
