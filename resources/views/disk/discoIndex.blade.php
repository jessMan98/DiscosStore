@extends('layouts.principal')
    
@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/featured_3.jpg')}}" data-speed="0.8">
  </div>
@endsection

@section('titulo')
  <div class="home_title" style="text-shadow: #B2A506  3px 5px;">Discos</div>  
@endsection

@section('main')

@include('alerts.mensaje')

<table class="table table-striped table-dark text-center" style="margin: 15px auto;">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Discografica</th>
      <th scope="col">Artista</th>
      <th scope="col">Genero</th>
      <th scope="col">Album</th>
      <th scope="col">Año</th>
      <th scope="col">Formato</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($registros as $disco)
    <tr>
       
       <td> <img class="card-img-top" style="width: 100px;" src="archivos/{{ $disco->imagen}}"></td>
          
      <td> {{ $disco->discografica->nDisquera }}</td>
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
        <a href="{{ route('discos.show', $disco->id) }}" class="btn btn-sm btn-info">Ver Informacion</a>  
      </td>          
    </tr>
    @endforeach
  </tbody>
</table>
<a  href="{{ route('discos.create') }}"  class="btn btn-success botonD">Agregar Disco</a> <br><br>

@endsection
            