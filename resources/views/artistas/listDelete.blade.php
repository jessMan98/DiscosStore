@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/index.jpg')}}" data-speed="0.8">
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
           
           <!--<a href="{{ route('restaura',$basura->id) }}" class="btn btn-sm btn-success">Restaurar</a>--> 
           
          </td>          
        </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('famoso.index') }}" class="btn btn-sm btn-info" style="margin-left: 100px; margin-bottom: 10px;">Regresar</a> 

  @endsection