      <!-- header section start -->
      <div class="header_section">
      <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('posts.index')}}">Home</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div><a href="{{route('posts.index')}}"><h1 style="color: white; font-family: Georgia, 'Times New Roman', Times, serif;">Dardos Tech</h1></a></div>
               <div class="menu_main">
                  <ul>
                     @if (Route::has('login'))
                     @auth
                     <li class="active"><a href="{{route('posts.index')}}">Home</a></li>
                     @if (Auth::user()->roles->contains('name', 'admin'))
                     <li>
                    <a href="{{ route('posts.admindash') }}">Admin Dashboard</a>
                    </li>
                    @endif
                     <x-app-layout>
                     </x-app-layout>
                     @else
                     <li class="active"><a href="{{route('posts.index')}}">Home</a></li>
                     <li><a href="{{route('login')}}">Login</a></li>
                     <li><a href="{{route('register')}}">Register</a></li>
                     @endauth
                     @endif
                  </ul>
               </div>
            </div>
         </div>
