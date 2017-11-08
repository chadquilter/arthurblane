<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MDG') }}</title>
    <!-- Styles -->
    <link href= {{ asset('/css/app.css') }} rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    @include('inc.navbar')
    <div id="app">

    </div>

</body>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</html>
