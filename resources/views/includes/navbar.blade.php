<nav class="navbar navbar-light navbar-expand-lg navbar-post fixed-top navbar-fixed-top" data-aos="fade-down">
      <div class="container-fluid">
        <a class="navbar-brand d-block d-lg-none" href="{{ route('home') }}">
          <img src="/images/logo.png" alt="berkata logo" />
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('list-post') }}">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categories</a>
            </li>
          </ul>
          <!-- Desktop Menu -->
          <a class="d-none d-lg-flex navbar-brand ml-auto" href="{{ route('home') }}">
            <img src="/images/logo.png" alt="berkata logo" />
          </a>
          <ul class="d-none d-lg-flex navbar-nav ml-auto">
            <li class="nav-item">
              <a class="d-inline-block btn btn-create-post px-4 py-2" href="{{ route('create-post') }}">Create Post</a>
            </li>
          </ul>

          <!-- Mobile Menu -->
        </div>
      </div>
    </nav>