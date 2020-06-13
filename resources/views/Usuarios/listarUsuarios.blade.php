@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Listado de Usuarios <a href="/agregar_usuario"
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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nro Doc</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $usuario)

                        <tr>
                            <td>{{ $usuario->id_usuario}}</td>
                            <td>{{ $usuario->nombre}}</td>
                            <td>{{ $usuario->apellido}}</td>
                            <td>{{ $usuario->nro_doc}}</td>
                            <td>{{ $usuario->usuario}}</td>
                            <td>
    
                                <!-- Modificar -->
                                <form action="/actualizar_usuario" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_usuario" type="hidden" value="{{ $usuario->id_usuario }}">
                                    <button class="btn btn-warning fas fa-edit"></button>
                                </form>
    
                                <!-- Eliminar -->
                                <form action="/eliminar_usuario" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="id_usu" type="hidden" value="{{ $usuario->id_usuario }}">
                                    <button class="btn btn-danger far fa-trash-alt"></button>
                                </form>
    
                                <!-- Asignación de permisos de usuario -->
                                <form action="/asignacion_de_permisos_de_usuario" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="id_usuario" type="hidden" value="{{ $usuario->id_usuario }}">
                                    
                                    <button class="btn btn-primary"><i class="fas fa-user-shield"></i></button>
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