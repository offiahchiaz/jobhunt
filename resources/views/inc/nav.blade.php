<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-4	">
      <a class="navbar-brand" href="{{ url('/') }}">Jobhunt</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="browsejobs.html" class="nav-link">Browse Jobs</a></li>
          {{-- <li class="nav-item"><a href="candidates.html" class="nav-link">Canditates</a></li> --}}
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          {{-- <li class="nav-item cta mr-md-1"><a href="new-post.html" class="nav-link">Post a Job</a></li> --}}
          {{-- <li class="nav-item cta cta-colored"><a href="job-post.html" class="nav-link">Want a Job</a></li> --}}

          @guest
            <li class="nav-item cta mr-md-1">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item cta cta-colored">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif

          @else

            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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