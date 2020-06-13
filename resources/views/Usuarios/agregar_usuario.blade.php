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

                    <h2 class="panel-title">Agregar Usuario</h2>
                </header>
                    <div class="panel-body">
                        <form action="/agregar_usuario_guardar" class="form-horizontal form-bordered" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Nombre</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nombre" id="inputDefault">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Apellido</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apellido" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Nro de Documento</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nro_doc" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Usuario</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="usuario" id="inputDefault">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputDefault">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" id="inputDefault">
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