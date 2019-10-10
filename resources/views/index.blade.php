@extends('welcome')

@section('tabla')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      
      <th scope="col">Genero</th>
      <th scope="col">Año</th>
      <th scope="col">Album</th>
      <th scope="col">Banda</th>
      <th scope="col">Formato</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach($registros as $disco)
    <tr>
      
      <td> {{ $disco->genero }} </td>
      <td> {{ $disco->año }} </td>
      <td> {{ $disco->album }} </td>
      <td> {{ $disco->banda }} </td>
      <td> {{ $disco->formato }} </td>
      
      <td>
        <a href="{{ route('discos.show', $disco->id) }}" class="btn btn-sm btn-info">Ver Informacion</a>  
      </td>        
       
    </tr>
    @endforeach
  

  </tbody>
</table>
<a  href="{{ route('discos.create') }}"  class="btn btn-success">Agregar</a> <br><br>
@endsection





