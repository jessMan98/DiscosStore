@extends('layouts.principal')

@section('imagen')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_back.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_4.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_1.jpg')}}" alt="Third slide">
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
  <div class="home_title" style="text-shadow: #B2A506  3px 5px;">Usuarios</div>  
@endsection

@section('main')

<table class="table table-striped table-dark text-center" style="margin: 15px auto; width: 650px;">
  <thead>
    <tr>
      <th scope="col">Role</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>

    </tr>
  </thead>
  <tbody>
    @foreach($users as $usuario)
    <tr>
      <td>
        @foreach($usuario->roles as $rol)
          <ul> {{ $rol->name }} </ul>
        @endforeach
      </td>
      <td> {{ $usuario->name }}</td>
      <td> {{ $usuario->email}} </td>       
    </tr>
    @endforeach
  </tbody>
</table>

@endsection