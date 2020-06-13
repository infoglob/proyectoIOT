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

                <h2 class="panel-title">Permisos Disponibles</h2>
            </header>
            <div class="panel-body">
                <!-- Inicio formulario -->
                <form action="/agregar_permiso_usuario" method="post">

                    @csrf
                    <!-- Input -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> ID del usuario</label>
                        <div class="col-sm-2">
                            <input value="{{$id_usuario}}" name="id_usuario" type="text" class="form-control" required
                                readonly="true" />
                        </div>
                    </div>


                    <select id="Permisos" name="id_permiso" required class="form-control select2" style="width: 100%;">

                        @foreach ($permisos_filtrado as $permisos_filtrado)

                        <option value="{{ $permisos_filtrado['id_permiso'] }}">
                            {{ $permisos_filtrado['descripcion_permiso'] }} - {{ $permisos_filtrado['ruta_permiso'] }}
                        </option>

                        @endforeach

                    </select>

                    <!-- Inicio footer -->
                    <div class="panel-footer mt-3" style="border-width:1px">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                    <!-- Fin footer -->

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
                <table id="tabla" class="table table-bordered table-striped mb-none">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripción del permiso</th>
                            <th>Ruta del permiso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario->permisos as $usuario)
    
                        <tr>
                            <td>{{ $usuario->id_permiso}}</td>
                            <td>{{ $usuario->descripcion_permiso}}</td>
                            <td>{{ $usuario->ruta_permiso}}</td>
                            <td>
    
                                <!-- Eliminar -->
                                <form action="/eliminar_permiso_usuario" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="idUser" type="hidden" value="{{ $id_usuario }}">
                                    <input name="idPer" type="hidden" value="{{ $usuario->id_permiso }}">
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