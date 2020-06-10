@extends('layouts.dashboard')

@section('contenido')

<!-- start: page -->
					
<div class="container">


    <div class="card border-primary" style="border-width:1px;">


        <div class="card-header">

     
            <h2 class="panel-title"> Listado de Tipo de Dispositivos <a href="/insertar_tipo_dispositivos"
                    class="btn btn-outline-success float-right">
                    <i class="fa fa-plus"></i>
                    Agregar</a> </h2>

        </div>

  
        <div class="card-body">

            <!-- Inicio tabla -->
            <table id="tabla" class="table table-bordered table-striped mb-none">

                <!-- Head de la tabla-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <!-- Cuerpo de la tabla -->
                <tbody>
		<!--purete entondces-->

                    @foreach ($tiposDeDispositivos  as $tiposDeDispositivos)

                    <tr>
                        <td>{{ $tiposDeDispositivos->id_tipo_dispostivo }}</td>
                        <td>{{ $tiposDeDispositivos->descripcion_tipo_dispositivo }}</td>
                        <td>

                            <!-- Modificar -->
                            <form action="/actualizar_tipo_dispositivos" method="post" style="display: inline-block">
                                @csrf
                                <input name="id" type="hidden" value="{{ $tiposDeDispositivos->id_tipo_dispostivo }}">
                                <button class="btn btn-warning fas fa-edit"></button>
                            </form>

                            <!-- Eliminar -->
                            <form class="formulario_eliminar" action="/eliminar_tipo_dispositivos" method="post"
                                style="display: inline-block">
                                @csrf
                                <input name="id" type="hidden" value="{{ $tiposDeDispositivos->id_tipo_dispostivo }}">
                                <button class="btn btn-danger far fa-trash-alt"></button>
                            </form>

                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>



        </div>

    </div>
</div>
						

@endsection