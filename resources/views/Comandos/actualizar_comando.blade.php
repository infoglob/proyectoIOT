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

                    <h2 class="panel-title">Actualizar Comando</h2>
                </header>
                    <div class="panel-body">
                        <form action="/actualizar_comando_guardar" class="form-horizontal form-bordered" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">ID</label>
                                <div class="col-md-6">
                                <input value="{{ $comando->id_comando }}" type="text" class="form-control" name="id_comando" id="inputDefault" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Descripción</label>
                                <div class="col-md-6">
                                    <input value="{{$comando->descripcion_comando}}" type="text" class="form-control" name="descripcion_comando" id="inputDefault">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Ruta</label>
                                <div class="col-md-6">
                                    <input value="{{$comando->ruta_comando}}" type="text" class="form-control" name="ruta_comando" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Dispositivo</label>
                                <div class="col-md-6">
                                    <select id="dispositivo" name="dispositivo" required class="form-control select2">

                                        @foreach ($disp as $disp)
                                            @if($disp->id_dispositivo === $comando->dispositivo_id_dispositivo )
                                                <option selected value="{{ $disp->id_dispositivo}}">
                                                {{ $disp->descripcion_dispositivo }}</option>
                                            @else
                                                <option value="{{ $disp->id_dispositivo}}">{{ $disp->descripcion_dispositivo }}
                                                </option>
                                            @endif
                
                                        @endforeach
                        
                                    </select>
                
                                </div>
                            </div>

                            <div class="form-group text-center">
                            <button class="btn btn-primary" style="text-align:center;">Guardar</button>
                            </div>
                        </form>
                    </div>
               
            </section>
        </div>
    </div>
@endsection