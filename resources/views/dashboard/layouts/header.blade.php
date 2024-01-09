<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Unpas</a>
    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi"><use xlink:href="#search"/></svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
      </li>
    </ul>
    {{-- <div id="navbarSearch" class="navbar-search w-100">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div> --}}
    <div class="dropdown ms-auto mx-3 px-3">
        @auth
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns"></i> My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="POST">
            @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </ul>
        @else
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          </ul>
        @endauth
      </div>
  </header>
