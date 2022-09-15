<nav class="navbar navbar-expand-lg navbar-light" style="background:#4D4848">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'ZeroBuy') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"style="color: white;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }} "style="color: white;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;"> 
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-light " style="background:#D0D1D6" >
  <div class="container-fluid "  >
  
    <div class="collapse navbar-collapse mx-auto " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Accueil</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Categorie</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="{{route('categorie' )}}">Publier_annonce</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="{{route('reclammations' )}}">Reclammation</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="{{route('conversations' )}}">Message</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="{{route('reservation' )}}">Reservation</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="{{route('order' )}}">Orders</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>