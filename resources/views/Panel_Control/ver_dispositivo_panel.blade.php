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

                <h2 class="panel-title">Agregar dispositivo al usuario:</h2>
                <h4 class="font-weight-bold">
                
                    <i class="far fa-user"></i> {{$usuario->nombre}}
                    
                </h4>
    
            </header>
            <div class="panel-body">
                <form action="/agregar_dispositivo_panel" method="post">

                    @csrf
                <input type="hidden" name="id_usuario" value="{{$usuario->id_usuario}}">
                    <!-- Input -->
                    <label class="col-sm-3 control-label">Agregar un nuevo dispositivo</label>
                    <div class="col-md-6">
    
                        <select id="idDispositivo" name="id_dispositivo" required class="form-control select2"
                            style="width: 100%;">
                            @foreach ($dispositivos_filtrado as $dispositivos_filtrado)
                                <option value="{{ $dispositivos_filtrado['id_dispositivo'] }}">{{ $dispositivos_filtrado['descripcion_dispositivo'] }} </option>
                            @endforeach
    
                        </select>
                        <button class="btn btn-primary mt-3">Guardar</button>
                    </div>
                        
                </form>
            </div>

        </section>
    </div>
</div>

<hr style="border: #34495e 2px;">

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Listado de permisos asociados al usuario</h2>
            </header>
            <div class="panel-body">
                <table id="tabla" class="table table-bordered table-striped table-condensed mb-none">

                    <!-- Head de la tabla-->
                    <thead>
                        <tr>
                            <th>Dispositivo</th>
                            <th>Ip</th>
                            <th>Mac</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
    
                    <!-- Cuerpo de la tabla -->
                    <tbody>
    
                        @foreach($usuario->dispositivos as $dispositivo)
    
                        <tr>
                            <td>{{$dispositivo->descripcion_dispositivo}}</td>
                            <td>{{$dispositivo->ip}}</td>
                            <td>{{$dispositivo->mac}}</td>
                            <td>{{$dispositivo->tipoDeDispositivos->descripcion_tipo_dispositivo}}</td>
                            <td>
                                <!-- Eliminar -->
                                <form action="/quitar_dispositivo_panel" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_usuario" type="hidden" value="{{ $usuario->id_usuario }}">
                                    <input name="id_dispositivo" type="hidden" value="{{ $dispositivo->id_dispositivo }}">
                                    <button class="btn btn-danger far fa-trash-alt"></button>
                                </form>
    
                            </td>
                        </tr>
    
                        @endforeach
    
                    </tbody>
    
                </table>
            </div>

        </section>
    </div>
</div>
@endsection