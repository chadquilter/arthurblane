@extends('layouts.app')

@section('content')
  <div class="container">
    <br>

    <div class="card bg-secondary border border-dark rounded">
      <div class="card-title">
        <h1 class="lead display-3">Login:</h1>
        <hr class="my-5">
      </div>
    </div>

          <div class="panel panel-default">
            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 lead">E-Mail Address</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 lead">Password</label>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      Login
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      Forgot Your Password?
                    </a>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
  <br>
@endsection
