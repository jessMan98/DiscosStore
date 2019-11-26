@extends('layouts.principal')

@section('imagen')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/news_2.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/news_1.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/news_3.jpg')}}" alt="Third slide">
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
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;"> Creacion de Artistas</div>   
@endsection

@section('main')
    <div class="container">
      <div class="row justify-content-center"style="margin: 20px auto;">
        <div class="col-md-8">
          <div class="card card text-white bg-dark mb-3" style="box-shadow: gray 5px 5px 10px;">
            <div class="card-body text-white">
              
              @include('alerts.validacion')
              
              @if(isset($famoso))
                <!--<form action="{{route('famoso.update', $famoso->id)}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">-->
                {!! Form::model($famoso,['route'=> ['famoso.update',$famoso->id], 'method' => 'PATCH']) !!}
              @else
              <!-- <form action="{{route('famoso.store')}}" method="POST">-->
                {!! Form::open(['route'=>'famoso.store']) !!}
              @endif

             <!-- @csrf genera linea de codigo hidden _token-->
             <div class="form-group">
                <!--<label for="formGroupExampleInput">Nombre</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" value="{{$famoso->nombre ?? ''}}">-->
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',null,['class'=> $errors->has('nombre') ? 'form-control is-invalid': 'form-control']) !!}
             </div>
             
             <div class="form-group">
                <!--<label for="formGroupExampleInput">Nombre Artistico</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="artistico" value="{{ $famoso->artistico ?? ''}}">-->
                {!! Form::label('artistico','Nombre Artistico') !!}
                {!! Form::text('artistico',null,['class'=> $errors->has('artistico') ? 'form-control is-invalid' : 'form-control']) !!} 
             </div>

             <div class="form-group">
                <!--<label for="formGroupExampleInput">Nacionalidad</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nacionalidad" value="{{ $famoso->nacionalidad ?? ''}}">-->
                {!! Form::label('nacionalidad','Nacionalidad') !!}
                {!! Form::text('nacionalidad',null,['class'=> $errors->has('nacionalidad') ? 'form-control is-invalid' : 'form-control']) !!}
             </div>

             <button type="submit" class="btn btn-primary">Enviar</button>
               <a href="{{ route('famoso.index')}}"class="btn btn-danger">Cancelar</a>
             <!--</form>-->
               {!! Form::close() !!}

            </div>
           </div>
          </div>
      </div>
    </div>   

@endsection