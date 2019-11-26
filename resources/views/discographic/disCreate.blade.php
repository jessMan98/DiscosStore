@extends('layouts.principal')

@section('imagen')
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_back.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/artist_4.jpg')}}" alt="Second slide">
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
<div class="home_title" style="text-shadow: #B2A506  2px 4px;"> Creacion de Disqueras</div>        
@endsection

@section('main')

      <div class="container">
        <div class="row justify-content-center" style="margin: 50px auto;">
          <div class="col-md-8">
            <div class="card card text-white bg-dark mb-3" style="box-shadow: gray 5px 5px 10px;">
             <div class="card-body">
                @include('alerts.validacion')

                @if(isset($discografica))
                  <!--<form action="{{ route('discografica.update',$discografica->id)}}" method="POST" >
                  <input type="hidden" name="_method" value="PATCH">-->
                  {!! Form::model($discografica,['route'=> ['discografica.update',$discografica->id], 'method' => 'PATCH']) !!}
                @else
                  <!--<form action="{{route('discografica.store')}}" method="POST">-->
                  {!! Form::open(['route'=>'discografica.store']) !!} 
                @endif

                <!--@csrf genera linea de codigo hidden _token--> 
                <div class="form-group">
                  <!--<label for="formGroupExampleInput">Nombre Disquera</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="nDisquera" value="{{ $discografica->nDisquera ?? ''}}">-->
                  {!! Form::label('nDisquera','Nombre Disquera') !!}
                  {!! Form::text('nDisquera',null,['class' => $errors->has('nDisquera') ? 'form-control is-invalid' :'form-control']) !!}   
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('discografica.index') }}"class="btn btn-danger">Cancelar</a> 
               {!! Form::close() !!} 

             </div>
            </div>
          </div>
        </div>
      </div>

@endsection