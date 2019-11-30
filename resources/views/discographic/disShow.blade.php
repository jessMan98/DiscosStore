@extends('layouts.principal')

@section('imagen')
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/electronica4.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_back.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/concierto.jpg')}}" alt="Third slide">
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