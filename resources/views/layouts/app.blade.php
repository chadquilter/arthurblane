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
    <div id='app'>
      @include('inc.navbar')
      <div class="body-container">
        @yield('content')
      </div>
    @include('inc.footer')
    </div>
  </main>
    <!-- Scripts -->
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>
