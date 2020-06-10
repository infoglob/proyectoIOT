@extends('layouts.dashboard')

@section('contenido')

<div class="container">
  <!-- ================================================================= -->
  <!-- Inicio panel -->
  <!-- ================================================================= -->
  <div class="card border-primary" style="border-width:1px;">


    <!-- Inicio header de panel -->
    <div class="card-header border-primary"style="border-width:1px">

      <!-- Título del header -->
      <h2>Nuevo Tipo de Dispositivo</h2>
    </div>
    <!-- Fin header de panel -->

    <div class="card-body">
      <!-- Inicio formulario -->
      <form action="/insertar_tipo_dispositivos_guardar" method="post">

        @csrf

        <!-- Inicio cuerpo del panel -->
        <div class="panel-body">

          <!-- Input -->
          <div class="form-group">
            <label class="col-sm-3 control-label"> Descripción <span class="required">(*):</span></label>
            <div class="col-sm-12">
              <input name="descripcion" placeholder="Ingrese aquí la descripción" maxlength="50" type="text"
                class="form-control" required autocomplete="off" />
            </div>
          </div>

        </div>
        <!-- Fin cuerpo del panel -->
      </div>
        <!-- Inicio footer -->
        <div class="card-footer border-primary"style="border-width:1px">
          <button class="btn btn-primary">Guardar</button>
        </div>
        <!-- Fin footer -->
      </form>
      <!-- Fin formulario -->
    
  </div>
</div>
<!-- ================================================================= -->
<!-- Fin panel -->
<!-- ================================================================= -->
@endsection