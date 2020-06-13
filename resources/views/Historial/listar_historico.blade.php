@extends('layouts.dashboard')

@section('contenido')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
    
            <h2 class="panel-title">Historial del Sistema Pereira-OIT </h2>
        </header>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-striped table-condensed mb-none">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Comandos</th>
                            <th>Dispositivos</th>
                            <th>Usuarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historial as $historial)

                        <tr>
                            <td>{{ $historial->id_historico}}</td>
                            <td>{{ $historial->fecha_hora_historico}}</td>
                            <td>{{ $historial->comandos->descripcion_comando}}</td>
                            <td>{{ $historial->dispositivos->descripcion_dispositivo}}</td>
                            <td>{{ $historial->usuarios->nombre}}</td>

                        </tr>
    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
@endsection