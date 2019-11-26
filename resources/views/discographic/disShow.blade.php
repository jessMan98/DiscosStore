@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/artists.jpg')}}" data-speed="0.8">
  </div>
@endsection

@section('titulo')
<div class="home_title" style="text-shadow: #B2A506  2px 4px;">Modificacion</div>        
@endsection

@section('main')

@include('alerts.mensaje')

  <div class="container" style="margin: 50px auto; width: 600px;">
    <table class="table table-striped table-dark text-center">
      <thead>
        <tr>    
          <th scope="col">Nombre Disquera</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td> {{ $discografica->nDisquera }} </td>
          <td>
            <a href="{{ route('discografica.edit', $discografica->id) }}" class="btn btn-primary btn-sm "> Editar </a>
            
            <form method="POST" action="{{ route('discografica.destroy', $discografica->id) }}" style="display: inline;">
                @method('DELETE') <!--<input type="hidden" name="_method" value="DELETE">-->
                @csrf
             <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas Borrarlo?')">Borrar</button>
            </form>  
          </td>          
        </tr>
      </tbody>
    </table>
     
       <a href="{{ route('discografica.index') }}" class="btn btn-primary btn-sm"> Regresar</a>
  </div>
      
@endsection