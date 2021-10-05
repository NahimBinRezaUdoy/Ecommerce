<header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      
        <div class=" navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            @guest
            <div class="dropdown">
                <button class="dropbtn">Categories</button>
                <div class="dropdown-content">
                  {{-- @foreach ($categories as $category)
                  <a href="{{ $category->slug }}">{{ $category->name }}</a>
                  @endforeach --}}
                </div>
              </div>
            <li class="nav-item">
              <a class="nav-link" href="#">Create An Accout</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="#">Login</a>
            </li>
            @endguest

            @auth
            <li class="nav-item">
              <a class="nav-link " href="#">My Profile</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#">Logout</a>
            </li>
            @endauth

            <li class="nav-item">
              <a class="nav-link " href="#">Cart</a>
            </li>
            

            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
  </header>