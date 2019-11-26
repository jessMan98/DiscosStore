@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/index.jpg')}}" data-speed="0.8">
  </div>
@endsection

@section('titulo')
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;">Modificacion</div>   
@endsection

@section('main')
@include('alerts.mensaje')

<div class="container" style="margin: 50px auto; width: 900px;">
  <table class="table table-striped table-dark text-center">
    <thead>
        <tr>
          
          <th scope="col">Nombre</th>
          <th scope="col">Nombre Aristico</th>
          <th scope="col">Nacionalidad</th>
          <th scope="col">Acciones</th>

        </tr>
      </thead>
      
      <tbody>
        <tr>
          <td>{{ $famoso->nombre }} </td>
          <td>{{ $famoso->artistico }}</td>
          <td>{{ $famoso->nacionalidad}} </td>
          <td>
            <a href="{{ route('famoso.edit', $famoso->id) }}" class="btn btn-primary btn-sm "> Editar </a>
            
            <form method="POST" action="{{ route('famoso.destroy', $famoso->id) }}" style="display: inline;">
                @method('DELETE') <!--<input type="hidden" name="_method" value="DELETE">-->
                @csrf
             <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas Borrarlo?')">Borrar</button>
            </form>
          
          </td>
        </tr> 
      
      </tbody>
   </table>

    <a href="{{ route('famoso.index') }}" class="btn btn-primary btn-sm"> Regresar</a>
</div>
@endsection
   









