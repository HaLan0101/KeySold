<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/index">KeySold</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      {{-- Research bar --}}
        <ul class="navbar-nav">
            <div>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for a game...">
                  <span class="input-group-append">
                    <button class="btn btn-secondary" type="button">Search !</button>
                  </span>
                </div>
            </div>
        </ul>
        {{-- End Research bar --}}
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/index">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @if(auth()->guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Register</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/signout') }}">Sign Out</a>
          </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>
