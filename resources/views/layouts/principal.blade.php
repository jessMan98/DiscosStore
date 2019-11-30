<!DOCTYPE html>
<html lang="en">
<head>
<title>Discografia</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('MusicStyle/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('MusicStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('MusicStyle/plugins/video-js/video-js.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('MusicStyle/styles/artist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('MusicStyle/styles/artist_responsive.css')}}">


</head>

<body>
 <!--Barra de Navegacion-->
  <header class="header">
    @include('layouts.menuNav')
  </header>

 <!-- Imagen y titulo -->
  <div class="home">
     @yield('imagen')
     <div class="home_container">
      <div class="row">
       <div class="col">
        <div class="home_content text-center">
          @yield('titulo')
        </div>
       </div>       
      </div>
    </div>
  </div>
 
 
  <!--<div class="search">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="search_form_container">
            <form action="#" class="search_form" id="search_form">
              <div class="d-flex flex-md-row flex-column align-items-center justify-content-between">
                <input type="text" class="search_input" placeholder="Artist" required="required">
                <input type="text" class="search_input" placeholder="Album" required="required">
                <button class="button search_button"><span>search</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>-->


<!--Contenido Principal Tablas-->
<section>
  <div class="container">
    @yield('main')
  </div>
</section>

<!-- Footer -->

<footer class="footer">
    <div class="background_image" style="background-image:url({{ asset('MusicStyle/images/footer.jpg') }}"></div>
    <div class="footer_content">
      <div class="container">
        <div class="row">
          <div class="col text-center">

            <!-- Logo -->
            <div class="logo">
              <a href="#" class="d-flex flex-row align-items-end justify-content-start">
                <span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
                <span class="logo_text">MusicMR</span>
              </a>
            </div>

            <!-- Footer Social -->
            <div class="footer_social">
              <ul class="d-flex flex-row align-items-center justify-content-center">
                <li><a href="https://www.pinterest.es"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="footer_bar">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
          </div>
        </div>
      </div>
    </div>
      
  </footer>


<script src="{{ asset('MusicStyle/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('MusicStyle/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('MusicStyle/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/jPlayer/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/jPlayer/jplayer.playlist.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/video-js/video.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/video-js/Youtube.min.js') }}"></script>
<script src="{{ asset('MusicStyle/js/artist.js') }}"></script>

</body>
</html>


