@extends('layouts.principal')


@section('imagen')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/otro_1.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/otro_5.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/otro_7.jpg')}}" alt="Third slide">
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>  
@endsection



@section('titulo')
  <div class="home_title" style="text-shadow: #B2A506  3px 5px;">Catalogo</div>  
@endsection

@section('main')

<table class="table table-striped table-dark text-center" style="margin: 15px auto;">
  <thead>
    <tr>
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Imagen</th>     
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Artista</th>
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Genero</th>
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Album</th>
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Año</th>
      <th scope="col" style="text-shadow: #B2A506  1px 1px">Formato</th>
    </tr>
  </thead>

  <tbody>
    @foreach($catalogo as $disco)
    <tr> 
      <td> <img  style="width: 100px;" src="{{ asset('archivos').'/'.$disco->imagen }}"></td>    
      <td> 
        <ul>
          @foreach($disco->famosos as $famoso)
           <li>{{ $famoso->artistico }}</li>
          @endforeach
        </ul>
      </td>      
      <td> {{ $disco->genero }}</td>
      <td> {{ $disco->album }} </td>
      <td> {{ $disco->año }} </td>
      <td> {{ $disco->formato }} </td>
      <td>         
    </tr>
    @endforeach
  </tbody>
</table>

@endsection