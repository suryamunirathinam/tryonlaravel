<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">{{config('app.name','LSAPP')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
          
        <li class="{{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/') }}">Home </a>
        </li>
        <li class="{{ Request::is('about') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="{{ Request::is('services') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
        <li class="{{ Request::is('posts') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/posts') }}">Blog</a>
      </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>