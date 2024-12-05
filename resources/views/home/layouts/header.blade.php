<style>
  .menu-active{
    color: cornflowerblue !important;
  }

  
</style>


<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img data-aos="flip-left" src="{{ asset('images/logo_pesawat.png') }}" alt="Logo" style="height: 40px;">
        <span class="ms-2 text-primary fw-bold">LET'S TRAVEL</span>
      </a>
      <!-- Toggler button -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mx-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('packages') ? 'menu-active' : '' }}" href="/packages">Packages Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog') ? 'menu-active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">Contact</a>
          </li>
        </ul>
        <!-- Buttons -->
        <form class="d-flex">
          <a class="btn btn-outline-primary me-2" href="{{ route('register') }}" role="button">Sign Up</a>
          <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
        </form>
      </div>
    </div>
  </nav>
</header>
