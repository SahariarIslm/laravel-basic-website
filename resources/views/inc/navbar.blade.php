<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Basic Website</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'active' : ''}} ">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="{{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="{{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
      </div>
</nav>