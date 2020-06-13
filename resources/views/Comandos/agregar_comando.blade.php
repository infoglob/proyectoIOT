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

                    <h2 class="panel-title">Agregar Comando</h2>
                </header>
                    <div class="panel-body">
                        <form action="/agregar_comando_guardar" class="form-horizontal form-bordered" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Descripción</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="descripcion" id="inputDefault">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Ruta</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ruta" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Dispositivo</label>
                                <div class="col-md-6">
                                    <select id="dispositivo" name="dispositivo" required class="form-control select2">

                                        @foreach ($dispositivos as $dispositivos)
                        
                                        <option value="{{ $dispositivos->id_dispositivo }}">{{ $dispositivos->descripcion_dispositivo }}</option>
                    
                                        @endforeach
                        
                                    </select>
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