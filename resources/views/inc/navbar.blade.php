
         <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
                 <div class="navbar-header">
                     <!-- Collapsed Hamburger -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                     <!-- Branding Image -->
                     <a class="navbar-brand" href="{{ url('/') }}">
                        <img alt="{{ config('app.name', 'MDG') }}" src="/images/logo-brand.png">
                    </a>
                 </div>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav text-md-center nav-justified w-100">
                        <li class="nav-item">&nbsp</li>
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/quotes">Quote</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/jobs">Jobs</a></li>
                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links -->
                         @guest
                             <li><a href="{{ route('login') }}">Login</a></li>
                         @else
                             <li class="nav-item dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                 </a>

                                 <ul class="dropdown-menu" role="menu">
                                     <li><a href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
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
