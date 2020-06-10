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
      <form action="/actualizar_tipo_dispositivos_guardar" method="post">

        @csrf

        <!-- Inicio cuerpo del panel -->
        <div class="panel-body">
                    <!-- Input -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-2">
                            <input  name="id" type="text"
                                class="form-control" required readonly="true" value=" {{ $tipoDeDispositivo -> id_tipo_dispostivo }} " />
                        </div>
                    </div>

          <!-- Input Que mierdad man macanada ya otravez.. ndish jaja -->
          <div class="form-group">
            <label class="col-sm-3 control-label"> Descripción <span class="required">(*):</span></label>
            <div class="col-sm-12">
              <input name="descripcion" placeholder="Ingrese aquí la descripción" maxlength="50" type="text"
                class="form-control" required autocomplete="off" value="{{ $tipoDeDispositivo -> descripcion_tipo_dispositivo }}" />
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