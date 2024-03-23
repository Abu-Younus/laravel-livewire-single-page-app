<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Single Page App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/" wire:navigate>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('profile')) ? 'active' : '' }}" aria-current="page" href="/profile" wire:navigate>Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" aria-current="page" href="/contact" wire:navigate>Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" aria-current="page" href="/about" wire:navigate>About</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
