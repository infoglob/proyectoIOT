@extends('layouts.dashboard')

@section('contenido')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Actualizar Dispositivo</h2>
            </header>
            <div class="panel-body">
                <form action="/actualizar_dispositivo_guardar" class="form-horizontal form-bordered" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">ID</label>
                        <div class="col-md-6">
                            <input value="{{$dispositivo->id_dispositivo}}" type="text" class="form-control"
                                name="id_dispositivo" id="inputDefault">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Descripción</label>
                        <div class="col-md-6">
                            <input value="{{$dispositivo->descripcion_dispositivo}}" type="text" class="form-control"
                                name="descripcion" id="inputDefault">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">IP</label>
                        <div class="col-md-6">
                            <input value="{{$dispositivo->ip}}" type="text" class="form-control" name="ip"
                                id="inputDefault">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">MAC</label>
                        <div class="col-md-6">
                            <input value="{{$dispositivo->mac}}" type="text" class="form-control" name="mac"
                                id="inputDefault">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Dispositivo</label>
                        <div class="col-md-6">
                            <select name="id_tipo_de_dispositivo" class="form-control select2"required>

                    @foreach ($tiposDeDispositivos as $tiposDeDispositivos)
                        @if($tiposDeDispositivos->id_tipo_dispostivo === $dispositivo->tipos_dispositivos_id_tipo_dispostivo)
                        
                        <option selected value="{{$tiposDeDispositivos->id_tipo_dispostivo}}">{{$tiposDeDispositivos->descripcion_tipo_dipositivo}}</option>
                        @else
                        <option value="{{$tiposDeDispositivos->id_tipo_dispostivo}}">
                            {{$tiposDeDispositivos->descripcion_tipo_dipositivo}}
                        </option>
                        @endif

                    @endforeach

                            </select>
                        </div>

                    </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary" style="text-align:center;">Guardar</button>
            </div>
            </form>
    </div>

    </section>
</div>
</div>
@endsection