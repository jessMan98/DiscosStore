<!DOCTYPE html>
<html>
 <head>
 	<title>Music for you Motherfucker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
               
          <div class="card-body">
          
         @if(isset($disco))  
          <form action="{{ route('discos.update', $disco->id)}}" method="POST">
          <input type="hidden" name="_method" value="PATCH">
          
          @else
            <form  action="{{ route('discos.store') }}" method="POST">
           @endif    

                @csrf <!--genera linea de codigo hidden _token-->
                 
                 <div class="form-group">
                    <label for="formGroupExampleInput">Género</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="genero" value="{{ $disco->genero ?? ''}}">
                 </div>


                 <div class="form-group">
                    <label for="formGroupExampleInput">Año</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="año" value="{{ $disco->año ?? ''}}">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput">Albúm</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="album" value="{{ $disco->album ?? ''}}">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput">Banda</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="banda" value="{{ $disco->banda ?? ''}}">
                 </div>

                 <div class="form-group">
                    <label for="formGroupExampleInput">Formato</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="formato" value="{{ $disco->formato ?? ''}}">
                 </div>
                 
                 <button type="submit" class="btn btn-primary">Enviar</button>
                 <a href="{{ route('discos.index')}}"class="btn btn-danger">Cancelar</a>
            </form>

          </div>
         </div>
        </div>
    </div>
  </div>

    

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>


</html>