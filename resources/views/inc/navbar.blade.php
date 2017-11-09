<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div>
    <a class="navbar-brand" href="#"><img alt="{{ config('app.name', 'MDG') }}" src="/images/logo-brand.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ ( url() == url() ) ? 'active' : '' }}">
        <a class="nav-link" href="/">Home {{ url('/services') }}</a>
      </li>
      <li class="nav-item {{ ( Request::route()->getName() == 'quotes.index') ? 'active' : '' }}">
        <a class="nav-link" href="/quotes">Quote</a>
      </li>
      <li class="nav-item {{ ( url() == url('/services') ) ? 'active' : '' }}">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li class="nav-item {{ ( Request::route()->getName() == 'jobs.index') ? 'active' : '' }}">
        <a class="nav-link" href="/jobs">Jobs</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url() }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
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
</nav>
