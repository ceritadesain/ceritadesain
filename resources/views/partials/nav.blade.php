 <nav class="navbar navbar-dark navbar-expand-lg ">
     <div class="container flex justify-content-between">
         <a class="navbar-link" href="{{ route('home') }}"><img class="h-48px" src="{{ url('assets/images/logo-1.png') }}"
                 alt="ceritadesain-logo"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mx-0 mx-lg-3">
                 <li class="nav-item d-block d-lg-none d-xl-block">
                     <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page"
                         href="{{ route('home') }}">Beranda</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ Route::currentRouteName() === 'discussions.index' ? 'active' : '' }}"
                         href="{{ route('discussions.index') }}">Diskusi</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-nowrap {{ Route::currentRouteName() === 'others.privacy_policy' ? 'active' : '' }}"
                         href="{{ route('others.privacy_policy') }}">Kebijakan Privasi</a>
                 </li>
             </ul>
             <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="{{ route('discussions.index') }}"
                 method="GET">
                 <div class="input-group">
                     <span class="input-group-text border-end-0 "><img
                             src="{{ url('assets/images/search-vector.png') }}" alt="Search">
                     </span>
                     <input class="form-control border-start-0 ps-0 " type="search" placeholder="Cari diskusi..."
                         aria-label="Search" name="search" value="{{ $search ?? '' }}">
                 </div>
             </form>
             <ul class="navbar-nav ms-auto my-2 my-lg-0">
                 @auth
                     <li class="nav-item my-auto dropdown">
                         <a class="nav-link p-0 d-flex align-items-center" href="javascript:;" data-bs-toggle="dropdown">
                             <span class="fw-bold me-2">{{ auth()->user()->username }}</span>
                             <div class="avatar-nav-wrapper ">
                                 <img src="{{ filter_var(auth()->user()->picture, FILTER_VALIDATE_URL) ? auth()->user()->picture : Storage::url(auth()->user()->picture) }}"
                                     alt="{{ auth()->user()->username }}" class="avatar rounded-circle">
                             </div>

                         </a>
                         <ul class="dropdown-menu mt-2">
                             <li>
                                 <a class="dropdown-item" href="{{ route('users.show', auth()->user()->username) }}">Profil
                                     Saya</a>
                             </li>
                             <li>
                                 <form action="{{ route('auth.login.logout') }}" method="POST">
                                     @csrf
                                     <button type="submit" class="dropdown-item">Keluar</button>
                                 </form>
                             </li>
                         </ul>
                     </li>
                 @endauth
                 @guest
                     <li class="nav-item my-auto">
                         <a class="nav-link text-nowrap {{ Route::currentRouteName() === 'auth.login.show' ? 'active' : '' }} "
                             href="{{ route('auth.login.show') }}">Masuk</a>
                     </li>
                     <li class="nav-item ps-1 pe-0">
                         <a class="btn btn-primary-black " href="{{ route('auth.sign-up.show') }}">Daftar</a>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>
