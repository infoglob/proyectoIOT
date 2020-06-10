@extends('layouts.dashboard')


@section('contenido')

<div class="container">

    <div class="card border-primary" style="border-width:1px;">

        <!-- Inicio header del card-->
        <div class="card-header">

            <!-- Título del panel-->
            <h2 class="panel-title"> Listado de Dispositivos <a href="/agregar_dispositivo"
                    class="btn btn-outline-success float-right">
                    <i class="fa fa-plus"></i>
                    Agregar</a> </h2>

        </div>

        <!-- Fin header de panel-->


        <!-- Inicio cuerpo del panel -->
        <div class="card-body">

            <!-- Inicio tabla -->
            <table id="tabla" class="table table-bordered table-striped mb-none">

                <!-- Head de la tabla-->
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
                                <input name="id" type="hidden" value="{{$dispositivos->id_dispositivo}}">
                                <button class="btn btn-warning fas fa-edit"></button>
                            </form>

                            <!-- Eliminar -->
                            <form class="formulario_eliminar" action="/#" method="post"
                                style="display: inline-block">
                                @csrf
                                <input name="id" type="hidden" value="{{ $dispositivos->id_dispositivo }}">
                                <button class="btn btn-danger far fa-trash-alt"></button>
                            </form>

                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>
            <!-- Fin tabla -->


        </div>
        <!-- Fin cuerpo del panel -->



        <!-- ================================================================= -->
        <!-- Fin panel -->
        <!-- ================================================================= -->
    </div>
</div>
@endsection