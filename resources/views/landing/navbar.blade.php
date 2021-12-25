<nav class="px-1 navbar navbar-expand-lg navbar-dark px-sm-5 fixed-top" style="background: rgba(12, 38, 76, 1);"">
    <div class="flex-row-reverse container-fluid">
        <a class="navbar-brand" href="/">
        <img src="{{ asset('img/svg/logo-bef.svg') }}" height="48" alt="logo-bef">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{Route::is('landing.about') ? 'active' : null}}" aria-current="page" href="/">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/coming-soon">Event</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/coming-soon">Kontak</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/blogs">Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('landing.form') ? 'active' : null}}" href="{{route('landing.form')}}">Daftar</a>
                </li>
        </ul>
    </div>
</div>
</nav>
