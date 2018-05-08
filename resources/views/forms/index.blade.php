@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Manage Forms</h1>
      <div class="card mx-auto">
        <br>
        <div class="card-body">
          @include('inc.dashmenu')
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
                    <td width=80%>
                      <div class=row>
                        <div class="col-md-4">
                          <strong>{{$form->form_title}}</strong>
                          <br> {{ $form->created_at->format('Y.m.d') }}
                        </div>
                      </td>
                      <td>
                        <a href="{{action('FormsController@downloadPDF', $form->id)}}" class="btn btn-success">PDF</a>
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
