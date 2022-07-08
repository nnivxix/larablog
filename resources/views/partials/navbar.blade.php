<nav class="navbar navbar-expand-lg text-light text-white" style="background-color:#FF2626 ;" >
    <div class="container text-white">
      <a class="navbar-brand fw-bold text-white" href="/">Larablog</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="text-white navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'home' ? 'active fw-semibold' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'post' ? 'active fw-semibold' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'about' ? 'active fw-semibold' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{ $active === 'categories' ? 'active fw-semibold' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
