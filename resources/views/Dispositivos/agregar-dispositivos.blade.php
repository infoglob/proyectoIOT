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

                    <h2 class="panel-title">Agregar Dispositivo</h2>
                </header>
                    <div class="panel-body">
                        <form action="/agregar_dispositivo_guardar" class="form-horizontal form-bordered" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Descripción</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="descripcion" id="inputDefault">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">IP</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ip" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">MAC</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="mac" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Dispositivo</label>
                                <div class="col-md-6">
                                    <select id="TiposDispositivos" name="TiposDispositivos" class="form-control select2" style="width: 100%;">

                                        @foreach ($tiposDeDispositivos as $tiposDeDispositivos)
                          
                                         <option value="{{ $tiposDeDispositivos->id_tipo_dispostivo }}">
                                            {{ $tiposDeDispositivos->descripcion_tipo_dispositivo }}</option>
                    
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