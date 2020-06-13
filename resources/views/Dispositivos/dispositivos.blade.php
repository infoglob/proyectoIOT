@extends('layouts.dashboard')


@section('contenido')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Listado de Comandos <a href="/agregar_dispositivo" class="btn btn-primary float-right">
                <i class="fa fa-plus"></i>
                Agregar</a> </h2>
    </header>
    <!-- Fin header de panel-->


    <div class="panel-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-bordered table-striped table-condensed mb-none">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Dispositivo</th>
                        <th>Ip</th>
                        <th>MAC</th>
                        <th>Tipo Dispositivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <!-- Cuerpo de la tabla -->
                <tbody>

                    @foreach ($dispositivos as $dispositivos)

                    <tr>
                        <td>{{ $dispositivos -> id_dispositivo}}</td>
                        <td>{{ $dispositivos -> descripcion_dispositivo}}</td>
                        <td>{{ $dispositivos -> ip}}</td>
                        <td>{{ $dispositivos -> mac}}</td>
                        {{-- @dd($dispositivos ->tipoDeDispositivos->descripcion_tipo_dispositivo); --}}
                        <td>{{ $dispositivos ->tipoDeDispositivos->descripcion_tipo_dispositivo}}</td>
                        <td>

                            <!-- Modificar -->
                            <form action="/actualizar_dispositivo" method="post" style="display: inline-block">
                                @csrf
                                <input name="id_dispositivo" type="hidden" value="{{$dispositivos->id_dispositivo}}">
                                <button class="btn btn-warning fas fa-edit"></button>
                            </form>

                            <!-- Eliminar -->
                            <form class="formulario_eliminar" action="/eliminar_dispositivo" method="post" style="display: inline-block">
                                @csrf
                                <input name="id_dispositivo" type="hidden" value="{{ $dispositivos->id_dispositivo }}">
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