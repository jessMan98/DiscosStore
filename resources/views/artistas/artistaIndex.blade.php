@extends('layouts.principal')

@section('imagen')
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/news_2.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/news_1.jpg')}}" alt="Second slide">
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
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;">Artistas</div>   
@endsection

@section('main')
  
@include('alerts.mensaje')
 
  <table class="table table-striped table-dark text-center" style="margin: 15px auto;">
    <thead>
      <tr>    
        <th scope="col">Nombre</th>
        <th scope="col">Nombre Artistico</th>
        <th scope="col">Nacionalidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
      
    <tbody>
      @foreach($artistas as $famoso)
        <tr>
          <td class="text-align-center"> {{ $famoso->nombre }} </td>
          <td> {{ $famoso->artistico }} </td>
          <td> {{ $famoso->nacionalidad }} </td>
          <td>
            <a href="{{ route('famoso.show',$famoso->id) }}" class="btn btn-sm btn-info">Ver Informacion</a>  
          </td>          
        </tr>
      @endforeach
    </tbody>
  </table>
  <div style="display: inline;"> <a href="{{ route('famoso.create') }}"  class="btn btn-success">Agregar Artista</a> </div>
  <div style="display: inline;"> <a href="{{ route('borrado') }}"  class="btn btn-danger">Lista Borrados</a> </div>
  <div class="container pagination justify-content-center" style="margin: 5px auto;"> {{ $artistas->links() }} </div>
 
    
@endsection      
   


