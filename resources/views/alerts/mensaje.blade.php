@if(Session::has('mensaje'))

<div class="row justify-content-center"> <!-- Agregada para efectos de esito -->
    <div class="col-5"> <!-- Agregada para efectos de esito -->

        <!-- Sección que muestra la alerta -->
        <div class="alert {{ Session::get('tipo', 'alert-info') }} alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> </button>

           <h5 class="text-center"> {{ Session::get('mensaje') }} </h5>
        </div>

    </div>
</div>

@endif