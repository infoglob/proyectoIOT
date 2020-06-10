@extends('layouts.dashboard')


@section('contenido')
<div class="container">

    <div class="card border-primary" style="border-width:1px;">


        <div class="card-header border-primary" style="border-width:1px">

            <h2>Editar Dispositivo</h2>
        </div>


        <div class="card-body">

            <form action="/actualizar_dispositivo_guardar" method="post">

                @csrf

                <div class="panel-body">

                    <!-- Input -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-2">
                            <input value="{{$dispositivo->id_dispositivo }}" name="id_dispositivo" type="text"
                                class="form-control" required readonly="true" />
                        </div>
                    </div>

                    <!-- Input -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Dispositivo <span class="required">(*)</span></label>
                        <div class="col-sm-9">
                            <input value="{{$dispositivo->descripcion_dispositivo}}" name="dispositivo"
                                placeholder="Ingrese aquí la descripción" maxlength="50" class="form-control" required
                                autocomplete="off" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> IP <span class="required">(*)</span></label>
                        <div class="col-sm-9">
                            <input value="{{$dispositivo->ip}}" name="ipDispositivo"
                                placeholder="Ingrese aquí la descripción" maxlength="50" class="form-control" required
                                autocomplete="off" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> MAC <span class="required">(*)</span></label>
                        <div class="col-sm-9">
                            <input value="{{$dispositivo->mac}}" name="macDispositivo"
                                placeholder="Ingrese aquí la descripción" maxlength="50" class="form-control" required
                                autocomplete="off" />
                        </div>
                    </div>

					{{-- @dd($tiposDeDispositivos); --}}
                    <select name="id_tipo_de_dispositivo" required>

                        @foreach ($tiposDeDispositivos as $tiposDeDispositivos)
                        @if($tiposDeDispositivos->id_tipo_dispostivo === $dispositivo->tipos_dispositivos_id_tipo_dispostivo)
                        <option selected value="{{$tiposDeDispositivos->id_tipo_dispostivo}}">{{$tiposDeDispositivos->descripcion_dispositivo}}</option>
                        @else
                        <option value="{{$tiposDeDispositivos->id_tipo_dispostivo}}">{{$tiposDeDispositivos->descripcion_dispositivo}}
                        </option>
                        @endif

                        @endforeach

                    </select>


                </div>

        </div>

        <div class="card-footer border-primary" style="border-width:1px">
            <button class="btn btn-primary">Guardar</button>
        </div>

        </form>


    </div>

</div>

@endsection