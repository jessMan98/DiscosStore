
<!DOCTYPE html>
<html lang="en">
<head>
<title>Music</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('MusicStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/plugins/OwlCarousel2-2.3.4/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('MusicStyle/styles/responsive.css') }}">

</head>
<body>

<div class="super_container">
  
  <!-- Header -->
 <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-center">

            <!-- Logo -->
            <div class="logo">
              <a href="{{route('casa')}}" class="d-flex flex-row align-items-end justify-content-start">
                <span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
                <span class="logo_text">MusicMR</span>
              </a>
            </div>

          
            <!-- User area -->
            <div class="log_reg d-flex flex-row align-items-center justify-content-start">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="{{ route('login')}}">Login</a></li>
                <li><a href="{{ route('register')}}">Register</a></li>
              </ul>

              <!-- Hamburger -->
              <div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Home -->

  <div class="home">
    
    <!-- Home Slider -->
    <div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">
        
        <!-- Slide -->
        <div class="slide">
          <div class="background_image" style="background-image:url(MusicStyle/images/featured_2.jpg)"></div>
          <div class="home_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="home_content">
              
                    <div class="home_title_container text-center">
                      <div class="home_title islive text-center"><h1>Your <span>MusicMR.</span></h1></div>
                    </div>
                   
                    @yield('logo')
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Footer -->

  <footer class="footer">
    <!--<div class="background_image" style="background-image:url(MusicStyle/images/footer.jpg)"></div>-->
    <div class="background_image" style="background-color:black"></div>-->
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
</div>

<script src="{{ asset('MusicStyle/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('MusicStyle/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('MusicStyle/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/OwlCarousel2-2.3.4/owl.carousel.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/jPlayer/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/jPlayer/jplayer.playlist.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('MusicStyle/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('MusicStyle/js/custom.js') }}"></script>
</body>
</html>
