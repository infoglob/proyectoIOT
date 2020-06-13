@extends('layouts.dashboard')

@section('contenido')
<div class="row">
@foreach($usuario->dispositivos as $dispositivo)

        <div class="col-md-6">
            <section class="panel panel-featured-left panel-featured-primary">
                <header class="panel-heading">

                    <h2 class="panel-title"> {{$dispositivo->descripcion_dispositivo}} - {{$dispositivo->ip}}</h2>
                </header>

                @foreach($comandos as $comando)
                    @if($comando->dispositivo_id_dispositivo === $dispositivo->id_dispositivo)
                    <div class="panel panel-body">
                        <form action="guardar_historial" method="post">
                            @csrf
                            <input name="id_dispositivo" type="hidden" value="{{$dispositivo->id_dispositivo}}">
                            <input name="id_comando" type="hidden" value="{{$comando->id_comando}}">
                            <input name="ip" type="hidden" value="{{$dispositivo->ip}}">
                            <input name="ruta" type="hidden" value="{{$comando->ruta_comando}}">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">{{$comando->ruta_comando}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
            </section>
        </div>
      @endforeach
    </div>
@endsection