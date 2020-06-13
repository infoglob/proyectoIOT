@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Listado de Permisos <a href="/agregar_permiso"
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
                            <th>Permiso</th>
                            <th>Ruta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($permiso as $permiso)

                        <tr>
                            <td>{{ $permiso->id_permiso}}</td>
                            <td>{{ $permiso->descripcion_permiso}}</td>
                            <td>{{ $permiso->ruta_permiso}}</td>
                            <td>
    
                                <!-- Modificar -->
                                <form action="/actualizar_permiso" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_per" type="hidden" value="{{ $permiso->id_permiso }}">
                                    <button class="btn btn-warning fas fa-edit"></button>
                                </form>
    
                                <!-- Eliminar -->
                                <form action="/eliminar_permiso" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    <input name="id_permiso" type="hidden" value="{{ $permiso->id_permiso }}">
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