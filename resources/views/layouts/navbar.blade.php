<nav class="navbar navbar-expand-lg navbar-dark sticky-top"  style="background-color: #a70000d5; box-shadow: 0 0 10px">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             @foreach ($categories as $category)
             <li><a class="dropdown-item" href="#">{{ $category->title }}</a></li>
             @endforeach
            
            </ul>
          </li>
        </ul>

      
        @auth
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="text-light btn icon-hover"><i class="bi bi-bookmark-check"  style="font-size: 20px;"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="text-light btn icon-hover"><i class="bi bi-cart-check"  style="font-size: 20px;"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="text-light btn icon-hover"><i class="bi bi-cart-check"  style="font-size: 20px;"></i></a>
          </li>
          <li class="nav-item hv">
            <button href="" class=" btn text-light icon-hover-2"><i class="bi bi-caret-right" style="font-size: 20px;"></i></button>
            <ul class="navbar-nav d-flex flex-column hov d-none justify-content-center mt-1 rounded shadow" style="background-color: #d80303;">
              <li class="nav-item log">
                <a href="#" class="text-light d-log">Profile</a>
              </li>
              <li class="nav-item log">
                <a href="#" class="text-light d-log">Dashboard</a>
              </li>
              <li class="nav-item log">
                <a href="/logout" class="text-light d-log">LogOut</a>
              </li>
            </ul>
          </li>
        </ul>
        @endauth

        @guest
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/logout" class=" btn text-light icon-hover">Log In  <i class="bi bi-box-arrow-in-right" style="font-size: 20px;"></i></a>
          </li>
        </ul>
        @endguest
        
        

      </div>
    </div>
  </nav>

  <script>
    
  </script>