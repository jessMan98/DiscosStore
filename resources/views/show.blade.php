 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<a href="{{ route('discos.index') }}" class="btn btn-default btn-sm"> Listado de Discos </a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      
      <th scope="col">Genero</th>
      <th scope="col">Año</th>
      <th scope="col">Album</th>
      <th scope="col">Banda</th>
      <th scope="col">Formato</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  
  <tbody>
    
    <tr>
    
      <td> {{ $disco->genero }} </td>
      <td> {{ $disco->año }} </td>
      <td> {{ $disco->album }} </td>
      <td> {{ $disco->banda }} </td>
      <td> {{ $disco->formato }} </td>
      
      <td> 
        
        <a href="{{ route('discos.edit',$disco->id) }}"> Editar </a>

        <form method="POST" action="{{ route('discos.destroy', $disco->id) }}">
            @method('DELETE') <!--<input type="hidden" name="_method" value="DELETE">-->
            @csrf
          <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
        </form>

      </td>
    </tr>

  </tbody>
</table>

   </div>
         </div>
        </div>
    </div>
  </div>


