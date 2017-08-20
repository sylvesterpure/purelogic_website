<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li>
          <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
        <li class="active"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @if (Auth::check())
        <li><a class="nav-link" href="{{ url('/home') }}">New Post</a></li>
        <li><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
      @else
        <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
      @endif
    </ul>
    </div>
  </div>
</nav>