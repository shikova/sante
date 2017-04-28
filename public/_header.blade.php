<header>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
/home/shikova/WorkSpace/site/public/storage/pages/logo.png
        <!-- Branding Image -->
        <a class="brand-image" href="{{ url('/') }}">
                  {{-- {{ config('app.name', 'Laravel') }} --}}
                <img src="img/logo.png" alt="">
              </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
          &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">HOME</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" >CATEGORIES</a>
            <ul class="dropdown-menu">
              <li><a href="#">DOCTORS</a></li>
              <li><a href="#">HOSPTALS</a></li>
              <li><a href="#">CLINICS</a></li>
              <li><a href="#">PHARMACIES</a></li>
              <li><a href="#">CLINICS</a></li>
              <li><a href="#">BLOOD BANKS</a></li>
              <li><a href="#">FITNESS CENTERS</a></li>
            </ul>
          </li>
          <li><a href="{{url('/blog')}}">BLOG</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ url('/packages') }}">PACKAGAES</a></li>
          <li><a href="{{ url('/contact-us') }}">CONTACT US</a></li>

          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="{{ route('login') }}">LOGIN</a></li>
          <li><a href="{{ route('register') }}">REGISTER</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
