@if(Session::has('fatal'))

<div class="row justify-content-center"> <!-- Agregada para efectos de esito -->
    <div class="col-12"> <!-- Agregada para efectos de esito -->

        <!-- Sección que muestra la alerta -->
        <div class="alert {{ Session::get('tipo', 'alert-info') }} alert-dismissible" role="alert" style="box-shadow: gray 5px 5px 10px;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> </button>

         <span> <h2 style="text-shadow: gray  2px 2px;" class="text-center"> {{ Session::get('fatal') }} </h2> </span>
        </div>

    </div>
</div>

@endif