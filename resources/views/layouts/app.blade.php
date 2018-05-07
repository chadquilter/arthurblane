<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Chad Quilter">
    <meta name="keywords" content="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor, marble falls, houston, dallas, fort worth, corpus christi, san antonio, el paso, texas, tx"/>
    <meta name="description" content="We design and build custom homes, custom construction, excavation, tile, remodeling, custom steel, finish-out, carports, garages, home remodeling and lots more! "/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MDG') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/image_styles.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body style="background-attachment:fixed;background-color:#fff;background-position:center top;background-repeat:repeat-x;background-image: url(/images/art-bg.jpg); width=100%; z-index: 1;">
  <main role="main">
    @include('inc.navbar')
    <br>
    <div class="body-container">
      <br>
      @yield('content')
    </div>
    @include('inc.footer')
  </main>
</body>
<!-- Scripts -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
</html>
