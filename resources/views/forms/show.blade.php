@extends('layouts.app')

@section('content')
    <div>
    <a href="/jobs" class="btn btn-default">Go Back</a>
    @if($form)
        <h1>{{$form->form_title}}</h1>
        <div>
            <p>
                {!!$form->form_date!!}
            </p>
            <br>
            <p>
                {{!!$form->form_body!!}}
            </p>
            <br>
            <p>
                {{$form->form_status}}
            </p>
            <hr>
            <small>Form Created: {{$form->created_at}} </small>
            <hr>
            @if(!Auth::guest())
              @if(Auth::user()->id == $form->user_id)
                <a href="/jobs/{{$form->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['JobsController@destroy', $form->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}}
                  :<wbr>{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                <br>
              @endif
            @endif
        </div>
    @else
        <div class="alert alert-danger">
            <strong>The Job id used was not found!</strong>
            Please go back to the jobs listing.
        </div>
    @endif
    <br>
    </div>
@endsection
