@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Listado de Usuarios </h2>
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-striped table-condensed mb-none">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless (empty($usuario))
                        @foreach ($usuario as $usuario)

                        <tr>
                            <td>{{ $usuario->id_usuario}}</td>
                            <td>{{ $usuario->nombre}}</td>
                            <td>{{ $usuario->usuario}}</td>
                            <td>   
                                <!-- Modificar -->
                                <form action="/ver_usu_dispositivo {{ $usuario->id_usuario }}" method="post" style="display: inline-block">
                                    @csrf
                                    <input name="id_usuario" type="hidden" value="{{ $usuario->id_usuario }}">
                                    <button class="btn btn-warning fas fa-edit"></button>
                                </form>
    
                            </td>
                        </tr>  
                        @endforeach
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
@endsection