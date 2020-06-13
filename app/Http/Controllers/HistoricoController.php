<?php

namespace App\Http\Controllers;

use App\Historico;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HistoricoController extends Controller
{
    public function historico_listar(){
        $historial = Historico::all();
        //dd($historial);
        return view('Historial.listar_historico', compact('historial'));
    }

    public function guardar_historial(Request $request){

        $id_dispositivo = $request->input("id_dispositivo");
        //dd($id_dispositivo);
        $id_comando = $request->input("id_comando");
        //dd($id_comando);
        $ip = $request->input("ip");
        //dd($ip);
        $ruta = $request->input("ruta");
        //dd($ruta);
        $id_usuario = session('id_usuario');
        //dd($id_usuario);
        $fecha = Carbon::now()->toDateTimeString();
        //dd($fecha);

        $hist = new Historico();
        $hist->fecha_hora_historico=$fecha;
        $hist->comandos_id_comando=$id_comando;
        $hist->dispositivo_id_dispositivo=$id_dispositivo;
        $hist->usuarios_id_usuario=$id_usuario;

        $hist->save();

        return Redirect::to("http://" . $ip . $ruta);

    }

}
