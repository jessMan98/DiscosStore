@extends('layouts.principal')

@section('imagen')
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('MusicStyle/images/artists.jpg')}}" data-speed="0.8">
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
            
    


 