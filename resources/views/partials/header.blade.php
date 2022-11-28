<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top p-0 m-0">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navBar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="links">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  
    <!-- Jumbotron -->
    <div class="p-5 text-center bg-light" style="margin-top: 58px;" id="secondHeader">
      <form method="POST" action="{{ route('home.searchFromApi') }}">
        @csrf
        <img src="{{ asset('./assets/off-logo-horizontal-light.svg') }}" alt="">
        <input type="search" name="home_search" placeholder="Search for a product" id="buscador" maxlength="13">
        <button id="botonBuscar" type="submit"><i class="fas fa-search"></i></button>
        {{-- <button id="scanner" class="btn btn-primary">SCANNER</button> --}}
      </form>
    </div>
    <!-- Jumbotron -->

