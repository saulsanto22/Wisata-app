<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img src="frontend/images/logo.png" alt="" />
      </a>
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item active mx-md-2">
            <a class="nav-link {{ request()->is('/') ? 'active' : ''}}  " href="{{'/' }}">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link {{ request()->is('paket-wisata') ? 'active' : ''}}" href="{{route('paket-wisata')}}">Paket Wisata</a>
          </li>
       @auth
           @if (Auth::user()->roles==="ADMIN")
               {{-- ADMIN --}}
               <li class="nav-item mx-md-2">
                <a class="nav-link {{ request()->is('admin') ? 'active' : ' '}}" href="{{route('dashboard')}}">Admin</a>
              </li>
           @endif
       @endauth
          
        </ul>

       
      </div>
    </nav>
  </div>
