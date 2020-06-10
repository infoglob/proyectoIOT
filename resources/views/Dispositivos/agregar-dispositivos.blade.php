@extends('layouts.dashboard')

@section('contenido')

<div class="container">
    <!-- ================================================================= -->
    <!-- Inicio panel -->
    <!-- ================================================================= -->
    <div class="card border-primary" style="border-width:1px;">


        <!-- Inicio header de panel -->
        <div class="card-header border-primary" style="border-width:1px">

            <!-- Título del header -->
            <h2>Nuevo Dispositivo</h2>
        </div>
        <!-- Fin header de panel -->

        <div class="card-body">

            <!-- Inicio formulario -->
            <form action="/agregar_dispositivo_guardar" method="post">
                @csrf

                <!-- Input -->
                <div class="form-group">
                    <label class="col-sm-3 control-label"> Dispositivo <span class="required">(*):</span></label>
                    <div class="col-sm-12">
                        <input name="dispositivo" placeholder="Ingrese aquí la descripción" maxlength="50" type="text"
                            class="form-control" required autocomplete="off" />
                    </div>
                </div>

                <!-- Input -->
                <div class="form-group">
                    <label class="col-sm-3 control-label"> IP <span class="required">(*):</span></label>
                    <div class="col-sm-12">
                        <input name="ip_disp" placeholder="Ingrese aquí la descripción" maxlength="50" type="text"
                            class="form-control" required autocomplete="off" />
                    </div>
                </div>

                <!-- Input -->
                <div class="form-group">
                    <label class="col-sm-3 control-label"> MAC <span class="required">(*):</span></label>
                    <div class="col-sm-12">
                        <input name="mac_disp" placeholder="Ingrese aquí la descripción" maxlength="50" type="text"
                            class="form-control" required autocomplete="off" />
                    </div>
                </div>
                <!-- Input -->
                

                <select id="TiposDispositivos" name="id_tipo_de_dispositivo" required class="form-control select2" style="width: 100%;">

                    @foreach ($TiposDeDispositivos as $TiposDispositivos)
      
                    <option value="{{ $TiposDispositivos->id_tipo_dispostivo  }}">{{ $TiposDispositivos->descripcion_tipo_dispositivo }}</option>

                    @endforeach
      
                </select>

        </div>
        <!-- Inicio footer -->
        <div class="card-footer border-primary" style="border-width:1px">
            <button class="btn btn-primary">Guardar</button>
        </div>
        <!-- Fin footer -->
        </form>
        <!-- Fin formulario -->

    </div>
</div>

@endsection


@section("javascript")

$("#TiposDispositivos").select2();

@endsection