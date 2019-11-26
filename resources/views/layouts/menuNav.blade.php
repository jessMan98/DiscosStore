<div class="container">
  <div class="row">
    <div class="col">
      <div class="header_content d-flex flex-row align-items-center justify-content-center">

        <!-- Logo -->
        <div style="margin-right: 40px;">
          <a href="{{ route('casa') }}" class="d-flex flex-row align-items-end justify-content-start">
            <span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
           <span class="logo_text top-right links">MusicMR</span>
          </a>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav">

          <ul class="d-flex flex-row align-items-center justify-content-start">
           
            <li><a href="">Catalogo</a></li>
            <li><a href="{{ route('discos.index') }}">Discos</a></li>
            <li><a href="{{ route('famoso.index') }}">Artistas</a></li>
            <li><a href="{{ route('discografica.index')}}">Discograficas</a></li>
            <li><a href="{{ route('usuario.index') }}">Usuarios</a></li>
            

            <li class="nav-item dropdown dropright">
              <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 50px;">
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" style="height: 30px;">
                      <span class="text-dark">{{ __('Logout') }}</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

              </div>
            </li>

          </ul>

        </nav>
         
  
       <!-- <div class="log_reg d-flex flex-row align-items-center justify-content-start">
          
          @if(Route::has('login'))
            <ul class="d-flex flex-row align-items-start justify-content-start">
              <li> <a href="{{ route('login') }}">Login </a></li>
              <li> <a href="{{ route('register') }}">Register </a></li>
            </ul>
          

          
            <div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
          @endif
        </div>-->

      </div>
    </div>
  </div>
</div>