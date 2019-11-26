@extends('layouts.principal')

@section('imagen')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/featured_3.jpg')}}" alt="First slide">
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('MusicStyle/images/featured_2.jpg')}}" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('MusicStyle/images/featured_6.jpg')}}" alt="Third slide">
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
 <div class="home_title" style="text-shadow: #B2A506  2px 4px;">Creacion de Discos</div>   
@endsection

@section('main')
 

  <div class="container">
    <div class="row justify-content-center" style="margin: 50px auto;">
      <div class="col-md-8">
        <div class="card card text-white bg-dark mb-3" style="box-shadow: gray 5px 5px 10px;">
                
        <div class="card-body">
            @include('alerts.validacion')

            @if(isset($disco))  
              <!--<form action="{{ route('discos.update', $disco->id)}}" method="POST">
              <input type="hidden" name="_method" value="PATCH">-->
              {!! Form::model($disco,['route' => ['discos.update',$disco->id], 'method' => 'PATCH']) !!}
            @else
              <!-- <form  action="{{ route('discos.store') }}" method="POST"> -->
              {!! Form::open(['route'=>'discos.store', 'enctype' =>'multipart/form-data']) !!}  
            @endif    
                <!--@csrf genera linea de codigo hidden _token-->
            
            <div class="form-group">
              <!--<label for="formGroupExampleInput">Genero</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="genero" value="{{ $disco->genero ?? ''}}">-->
              {!! Form::label('imagen','Imagen') !!}
              {!! Form::file('imagen',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
              <!--<label for="formGroupExampleInput">Genero</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="genero" value="{{ $disco->genero ?? ''}}">-->
              {!! Form::label('genero','Genero') !!}
              {!! Form::text('genero',null,['class'=> $errors->has('genero') ? 'form-control is-invalid': 'form-control']) !!}
            </div>

            <div class="form-group">
              <!--<label for="formGroupExampleInput">Año</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="año" value="{{ $disco->año ?? ''}}">-->
              {!! Form::label('año','Año') !!}
              {!! Form::text('año',null,['class'=> $errors->has('año') ? 'form-control is-invalid':'form-control']) !!}
            </div>

            <div class="form-group">
              <!--<label for="formGroupExampleInput">Albúm</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="album" value="{{ $disco->album ?? ''}}">-->
              {!! Form::label('album','Album') !!}
              {!! Form::text('album',null,['class'=> $errors->has('album') ? 'form-control is-invalid':'form-control']) !!}
            </div>

            <div class="form-group">
              <!--<label for="formGroupExampleInput">Formato</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="formato" value="{{ $disco->formato ?? ''}}">-->
              {!! Form::label('formato','Formato') !!}
              {!! Form::text('formato',null,['class'=> $errors->has('formato') ? 'form-control is-invalid':'form-control']) !!}
            </div>
            
            <div class="form-group">
              {!! Form::label('discografica_id','Discografica') !!}
              {!! Form::select('discografica_id',$disquera,null,['class' => 'form-control']) !!}
            </div> 

             <div class="form-group">
              {!! Form::label('famoso_id[]','Artistas') !!}
              {!! Form::select('famoso_id[]',$artistas,null,['class' => 'form-control','multiple']) !!}
            </div>   

              <button type="submit" class="btn btn-primary">Enviar</button>
              <a href="{{ route('discos.index')}}"class="btn btn-danger">Cancelar</a>
            <!--</form>-->
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection