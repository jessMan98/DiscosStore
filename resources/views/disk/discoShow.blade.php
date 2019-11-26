@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/featured_3.jpg')}}" data-speed="0.8">
  </div>
@endsection

@section('titulo')
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;">Modificacion</div>   
@endsection

@section('main')

@include('alerts.mensaje')

  <div class="container" style="margin: 50px auto; width: 800px;">
    <table class="table table-striped table-dark text-center">
      <thead>
          <tr>
            <th scope="col">Discografica</th>
            <th scope="col">Artista</th>
            <th scope="col">Genero</th>
            <th scope="col">Año</th>
            <th scope="col">Album</th>  
            <th scope="col">Formato</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td> {{ $disco->discografica->nDisquera }}</td>
            <td>
              @foreach($disco->famosos as $famoso)
                <ul> {{ $famoso->artistico}} </ul>
              @endforeach  
            </td>
            <td> {{ $disco->genero}}</td>
            <td> {{ $disco->año }} </td>
            <td> {{ $disco->album }} </td>
            <td> {{ $disco->formato }} </td>
            <td> 
         
              <a href="{{ route('discos.edit',$disco->id) }}" class="btn btn-primary btn-sm "> Editar </a>

              <form method="POST" action="{{ route('discos.destroy', $disco->id) }}" style="display: inline;">
                  @method('DELETE') <!--<input type="hidden" name="_method" value="DELETE">-->
                  @csrf
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas Borrarlo?')">Borrar</button>
              </form>
            
            </td>
          </tr> 
        </tbody>
     </table>

      <a href="{{ route('discos.index') }}" class="btn btn-primary btn-sm"> Regresar</a>
    </div>

@endsection