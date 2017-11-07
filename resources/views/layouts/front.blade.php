<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MDG') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/image_styles.css" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="body-container" >
          <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>
        </div>
        @include('inc.footer')
    </div>

</body>

</html>
