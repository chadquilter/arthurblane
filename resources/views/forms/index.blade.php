@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Manage Adresses</h1>
      <div class="card mx-auto">
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
            <a href="/address/create" class="btn btn-warning">Create Address</a>
          </div>
          <hr class="my-1">
          @include('inc.messages')
          <br>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          @if(count($forms) > 0)
          <div class="container border border-secondary rounded shadow_only">
            <table class="table table-striped table-hover table-responsive">
              <thead class="thead-inverse">
                <tr>
                  <th nowrap><h3><span class="badge">{{ $forms->total() }}</span> Saved Forms:</h3></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($forms as $form)
                  <tr>
                    <td width=80%><strong>Form: </strong>
                      <div class=row>
                        <div class="col-md-4">
                          <br> {{$form->form_title}}
                          <br> {{$form->form_date}}
                        </div>
                      </td>
                      <td><a href="/forms/{{$form->id}}/edit" class="btn btn-primary">Edit</a></td>
                      <td>
                        {!!Form::open(['action' => ['FormsController@destroy', $form->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <td>{{$forms->links()}}</td>
                    <td></td>
                    <td></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
