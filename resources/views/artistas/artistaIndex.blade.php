@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/index.jpg')}}" data-speed="0.8">
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
   


