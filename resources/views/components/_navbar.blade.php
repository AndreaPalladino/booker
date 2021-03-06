<nav class="navbar navbar-expand-lg bg-transparent  fixed-top">
    <div class="container">
      <a class="navbar-brand text-warning textFooter h2" href="{{route('home')}}">theBooker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link navlink navlink:hover" href="{{route('home')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navlink navlink:hover" href="#">Who</a>
          </li>
          <li class="nav-item active">
          <a class="nav-link navlink navlink:hover" href="{{route('book.index')}}">Books</a>
          </li>
          <li class="nav-item active">
          <a class="nav-link navlink navlink:hover" href="{{route('contact')}}">Contact</a>
          </li>
          
            <!-- Authentication Links -->
            @guest
                <li class="nav-item active">
                    <a class="nav-link text-warning text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a class="nav-link text-warning text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link text-warning dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('profile')}}"><i class="fas fa-user-circle mr-3"></i>Your Profile</a>
                      <a class="dropdown-item" href="{{route('book.create')}}"><i class="fas fa-book-medical mr-3"></i>Add a Book</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-3"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      
                        
                    </div>
                    
                </li>
                
            @endguest
    
        </ul>
      </div>
    </div>
  </nav>