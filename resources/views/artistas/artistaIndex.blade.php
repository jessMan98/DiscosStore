<!DOCTYPE html>
<html lang="en">
<head>
<title>Discografia</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="MusicStyle/bootstrap-4.1.2/bootstrap.min.css">
<link href="MusicStyle/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="MusicStyle/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="MusicStyle/styles/artist.css">
<link rel="stylesheet" type="text/css" href="MusicStyle/styles/artist_responsive.css">
</head>

<body>
  
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-center">

            <!-- Logo -->
            <div class="logo">
              <a href="#" class="d-flex flex-row align-items-end justify-content-start">
                <span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
                <span class="logo_text">MusicMR</span>
              </a>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="{{ route('casa') }}">Home</a></li>
                <li><a href="{{ route('discos.index') }}">Listado de Discos</a></li>
                <li><a href="">Artistas</a></li>
                <li><a href="blog.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>

            <!-- User area -->
            <div class="log_reg d-flex flex-row align-items-center justify-content-start">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
              </ul>

              <!-- Hamburger -->
              <div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


 

  <div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="MusicStyle/images/artists.jpg" data-speed="0.8"></div>
     <div class="home_container">
      
      <div class="home_content text-center">
         <div class="home_title">Artistas</div>        
      </div>

     <div class="row">
      <div class="col">
        <div class="container">
          

          <table class="table table-striped table-dark">
            <thead>
              <tr>    
                <th scope="col">Nombre</th>
                <th scope="col">Nombre Artistico</th>
                <th scope="col">Nacionalidad</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
      
            <tbody>
          
              <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>
                  <a href="" class="btn btn-sm btn-info">Ver Informacion</a>  
                </td>          
              </tr>
            
            </tbody>
          </table>
           <a  href=""  class="btn btn-success">Agregar</a> <br><br>
        </div>
            
        </div> 
       </div>       
      </div>
    </div>
 


<script src="MusicStyle/js/jquery-3.3.1.min.js"></script>
<script src="MusicStyle/bootstrap-4.1.2/popper.js"></script>
<script src="MusicStyle/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="MusicStyle/plugins/greMusicStyle/ensock/TweenMax.min.js"></script>
<script src="MusicStyle/greensock/TimelineMax.min.js"></script>
<script src="MusicStyle/scrollmagic/ScrollMagic.min.js"></script>
<script src="MusicStyle/greensock/animation.gsap.min.js"></script>
<script src="MusicStyle/greensock/ScrollToPlugin.min.js"></script>
<script src="MusicStyle/jPlayer/jquery.jplayer.min.js"></script>
<script src="MusicStyle/jPlayer/jplayer.playlist.min.js"></script>
<script src="MusicStyle/easing/easing.js"></script>
<script src="MusicStyle/progressbar/progressbar.min.js"></script>
<script src="MusicStyle/parallax-js-master/parallax.min.js"></script>
<script src="MusicStyle/scrollTo/jquery.scrollTo.min.js"></script>
<script src="MusicStyle/plugins/video-js/video.min.js"></script>
<script src="MusicStyle/plugins/video-js/Youtube.min.js"></script>
<script src="MusicStyle/js/artist.js"></script>

  </body>
</html>


