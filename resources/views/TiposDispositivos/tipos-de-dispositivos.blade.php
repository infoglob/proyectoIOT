@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Listado de Tipos de Dispositivos <a href="/insertar_tipo_dispositivos"
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
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiposDeDispositivos as $tiposDeDispositivos)

                        <tr>
                            <td>{{ $tiposDeDispositivos->id_tipo_dispostivo}}</td>
                            <td>{{ $tiposDeDispositivos->descripcion_tipo_dispositivo}}</td>
                            <td>
    
                                <!-- Modificar -->
                                <form action="/actualizar_tipo_dispositivos" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_tipo_dispostivo" type="hidden" value="{{ $tiposDeDispositivos->id_tipo_dispostivo }}">
                                    <button class="btn btn-warning fas fa-edit"></button>
                                </form>
    
                                <!-- Eliminar -->
                                <form action="/eliminar_tipo_dispositivos" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="id_tipo_dispostivo" type="hidden" value="{{ $tiposDeDispositivos->id_tipo_dispostivo }}">
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