@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Listado de Comandos <a href="/agregar_comando"
                class="btn btn-primary float-right">
                <i class="fa fa-plus"></i>
                Agregar</a> </h2>
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-striped table-condensed mb-none">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Ruta</th>
                            <th>Dispositivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comandos as $comandos)

                        <tr>
                            <td>{{ $comandos->id_comando}}</td>
                            <td>{{ $comandos->descripcion_comando}}</td>
                            <td>{{ $comandos->ruta_comando}}</td>
                            <td>{{ $comandos->dispositivos->descripcion_dispositivo}}</td>
                            <td>
    
                                <!-- Modificar -->
                                <form action="/actualizar_comando" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_comando" type="hidden" value="{{ $comandos->id_comando }}">
                                    <button class="btn btn-warning fas fa-edit"></button>
                                </form>
    
                                <!-- Eliminar -->
                                <form action="/eliminar_comando" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="id_comando" type="hidden" value="{{ $comandos->id_comando }}">
                                    <button class="btn btn-danger far fa-trash-alt"></button>
                                </form>
                            </td>
                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
@endsection