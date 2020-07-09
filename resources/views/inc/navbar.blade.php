<nav class="navbar navbar-expand-md navbar-dark bg-dark  shadow mb-4 d-none d-lg-block">
    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">akpan</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
            <li class="{{Request::is('/') ? 'active' : ''}} nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="{{Request::is('about') ? 'active' : ''}}">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="{{Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="contact">Contact</a>
            </li>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                </button>   
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/">Home</a>
                    <a class="dropdown-item" href="about">About</a>
                    <a class="dropdown-item" href="contact">Contact</a>
                </div>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="{{Request::is('messages') ? 'active' : ''}} nav-item">
                <a class="nav-link" href="messages">Admin</a>
            </div>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>