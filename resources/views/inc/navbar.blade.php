<header class="masthead">

         <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
           <!-- Branding Image -->
           <a class="navbar-brand" href="{{ url('/') }}">
              <img alt="{{ config('app.name', 'MDG') }}" src="/images/logo-brand.png">
          </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav text-md-center nav-justified w-100">
                      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="/quotes">Quote</a></li>
                      <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                      <li class="nav-item"><a class="nav-link" href="/jobs">Jobs</a></li>
              </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links -->
                         @guest
                           <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                         @else
                             <li class="nav-item dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                     {{ Auth::user()->name }}
                                 </a>

                                 <ul class="dropdown-menu" aria-labelledby="Dashboard">
                                     <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                             Logout
                                         </a>

                                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                         </form>
                                     </li>
                                 </ul>
                             </li>
                         @endguest
                     </ul>
             </div>
         </nav>
    </header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><img alt="{{ config('app.name', 'MDG') }}" src="/images/logo-brand.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/quotes">Quote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/jobs">Jobs</a>
          </li>

          <div class="navbar-right">
            @guest
              <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
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
          </div>

        </ul>
      </div>
    </nav>
