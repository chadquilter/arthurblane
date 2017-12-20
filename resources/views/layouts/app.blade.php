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
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/image_styles.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
  <main role="main">
    @include('inc.navbar')
    <br>
    <div class="body-container" style="background-attachment:fixed;background-color:#fff;background-position:center top;background-repeat:repeat-x;background-image: url(/images/art-bg.jpg); width=100%;">
      <br>
      @yield('content')
    </div>
    @include('inc.footer')
  </main>
    <!-- Scripts -->

  <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>
