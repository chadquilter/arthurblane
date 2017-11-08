@extends('layouts.app')

@section('content')
<div class="card">
  <h1 class="card-title">Dashboard</h1>
  <div class="card-block">
    @if (session('status'))
    <div class="alert alert-success">
          {{ session('status') }}
    </div>
    @endif
    <a href="/jobs/create" class="btn btn-primary">Create Job</a>
    <a href="/quotes" class="btn btn-success">Create Quote</a>
    <a href="/address" class="btn btn-warning">Manage Addresses</a>
    <a href="/items" class="btn btn-warning">Manage Items</a>
    <br>


  </div>
</div>
@endsection
