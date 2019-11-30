@extends('layouts.principal')

@section('imagen')
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/life.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_3.jpg')}}" alt="Second slide">
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
<div class="home_title" style="text-shadow: #B2A506  2px 4px;">Disqueras</div>        
@endsection

@section('main')

@include('alerts.mensaje')

<table class="table table-striped table-dark text-center" style="margin: 15px auto; width: 500px;">
  <thead>
    <tr>    
      <th scope="col">Nombre Disquera</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
          
  <tbody>
    @foreach($disquera as $discografica)
      <tr>
        <td> {{ $discografica->nDisquera }} </td>
        <td>
          <a href="{{ route('discografica.show',$discografica->id) }}" class="btn btn-sm btn-info">Ver Informacion</a>  
        </td>          
      </tr>
    @endforeach
  </tbody>
</table>
<div style="margin-left:305px;" style="display: inline;"> 
  <a href="{{ route('discografica.create') }}" class="btn btn-success">Agregar</a> 
</div>

<div class="container pagination justify-content-center" style="margin: 5px auto;"> {{ $disquera->links() }}  </div>


@endsection
            
    


 