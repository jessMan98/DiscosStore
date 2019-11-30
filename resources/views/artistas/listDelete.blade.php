@extends('layouts.principal')

@section('imagen')
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/clasica.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/guitar.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/news_3.jpg')}}" alt="Third slide">
      </div>
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
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;">Artistas Eliminados</div>   
@endsection


@section('main')
 

 <table class="table table-striped table-dark text-center" style="margin: 15px auto; width: 900px;">
    <thead>
      <tr>    
        <th scope="col">Nombre</th>
        <th scope="col">Nombre Artistico</th>
        <th scope="col">Nacionalidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
      
    <tbody>
     @foreach($trash as $basura)
        <tr>
          <td> {{$basura->nombre}} </td>
          <td> {{$basura->artistico}} </td>
          <td> {{$basura->nacionalidad}} </td>
          <td>
           
           <a href="{{ route('restaura',$basura->id) }}" class="btn btn-sm btn-success">Restaurar</a> 
           
          </td>          
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('famoso.index') }}" class="btn btn-sm btn-info" style="margin-left: 100px; margin-bottom: 10px;">Regresar</a> 

  @endsection