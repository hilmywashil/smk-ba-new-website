<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">Baitul Aziz</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li>
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
            Beranda
          </a>
        </li>

        <li>
          <a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">
            Tentang
          </a>
        </li>

        <li>
          <a href="{{ url('instructors') }}" class="{{ request()->is('instructors') ? 'active' : '' }}">
            Pengajar
          </a>
        </li>

        <li>
          <a href="{{ route('posts') }}" class="{{ request()->routeIs('posts*') ? 'active' : '' }}">
            Berita
          </a>
        </li>
        <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="course-details.html">Course Details</a></li>
            <li><a href="instructor-profile.html">Instructor Profile</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="terms.html">Terms</a></li>
            <li><a href="privacy.html">Privacy</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Kontak</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    @auth
      @auth
        <a class="btn-getstarted" href="{{ url('/dashboard/' . auth()->user()->role) }}">
          Dashboard
        </a>

        <!-- button logout - optional -->
        <!-- <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn-getstarted btn-logout">
                Logout
              </button>
            </form> -->
      @endauth
    @else
      <a class="btn-getstarted" href="{{ route('login') }}">
        Login
      </a>
    @endauth

  </div>
</header>