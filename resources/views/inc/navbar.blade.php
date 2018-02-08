<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navbar-transparant">
  <div>
    <a class="navbar-brand" href="/"><img alt="{{ config('app.name', 'MDG') }}" src="/images/logo-brand.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ ( \Request::url() == url('') ) ? 'active' : '' }}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ ( Request::route()->getName() == 'quotes.index') ? 'active' : '' }}">
        <a class="nav-link" href="/quotes">Contact</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
        <div class="dropdown-menu" aria-labelledby="Services">
          <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Concrete and Asphalt</a>
          <a class="dropdown-item {{ ( \Request::url() == url('cm') ) ? 'active' : '' }}" href="/cm">Construction Management</a>
          <a class="dropdown-item {{ ( \Request::url() == url('concrete') ) ? 'active' : '' }}" href="/concrete">Custom Concrete</a>
          <a class="dropdown-item {{ ( \Request::url() == url('homes') ) ? 'active' : '' }}" href="/homes">Custom Homes</a>
          <a class="dropdown-item {{ ( \Request::url() == url('kitchenbath') ) ? 'active' : '' }}" href="/kitchenbath">Custom Kitchen and Bath</a>
          <a class="dropdown-item {{ ( \Request::url() == url('demolition') ) ? 'active' : '' }}" href="/demolition">Demolition</a>
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
					<hr class="my-4">
        </div>
      </li>

      <li class="nav-item {{ ( Request::route()->getName() == 'jobs.index') ? 'active' : '' }}">
        <a class="nav-link" href="/portfolio">Portfolio</a>
      </li>
      <li class="nav-item align-top">
        <a class="nav-link" href="/quotes">
          <img src="/images/icons/phoneicon.png" width="30" height="30" alt="phone-icon"> (830)220-2876•<br>
          <img src="/images/icons/phoneicon.png" width="30" height="30" alt="phone-icon"> (830)265-0941•
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
          <div class="dropdown-menu" aria-labelledby="Dashboard">
            <a class="dropdown-item" href="/dashboard">Dashboard</a>
            <a class="dropdown-item" href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
    @endguest
  </ul>
</div>
<br>
</nav>
