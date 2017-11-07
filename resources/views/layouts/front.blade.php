<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MDG') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/image_styles.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="body-container" style="border-color:#f6f6f6;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:0px;padding-left:0px;padding-right:0px;background-attachment:fixed;background-color:#fff;background-position:center top;background-repeat:repeat-x;background-image: url(/images/art-bg.jpg); width=100%;">
          <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>
        </div>
        @include('inc.footer')
    </div>

</body>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</html>
