<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
    
     @if(!Auth::guest())
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Virtual Advisors') }}
        </a>
      @else
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Virtual Advisors') }}
        </a>
      @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button> 
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                @if(!Auth::guest())
                  <a class="nav-link" href="/home">Dashboard <span class="sr-only">(current)</span></a>
                @endif
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
              </li>
              @if(!Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="/chat">Chat Room</a>
              </li>
              @endif
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>     
            </ul>
            @if(!Auth::guest())
              <ul class="nav navbar-nav mr-right navbar-right">
                <li class="nav-item">
                <a href="/posts/create" class="btn btn-primary btn-xs">Create Post</a>
                </li>
              </ul>
            @endif
          </div>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" href="/posts/?hello" type="submit">Search</button>
              </form>

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">Dashboard</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
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
<br>