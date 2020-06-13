<?php

namespace App\Http\Controllers;

use App\Comando;
use App\Dispositivos;
use Illuminate\Http\Request;

class ComandoController extends Controller
{
    public function comandos(){

        $comandos = Comando::all();

        return view("Comandos.listar_comando", compact("comandos"));

    }

    public function agregar_comando(){

        $dispositivos = Dispositivos::all();
        return view('Comandos.agregar_comando', compact('dispositivos'));
    }

    public function agregar_comando_guardar(Request $request){
        $nombre = $request->input('descripcion') ;
        $ruta = $request->input('ruta');
        $dispositivos = $request->input('dispositivo');

        $comando=new Comando();
        $comando->descripcion_comando=$nombre;
        $comando->ruta_comando=$ruta;
        $comando->dispositivo_id_dispositivo=$dispositivos;
        $comando->save();

        return redirect()->action('ComandoController@comandos');
    }

    public function actualizar_comando(Request $request){
        $id_comando = $request->input('id_comando');
        $descripcion_comando = $request->input('descripcion_comando');
        $ruta_comando = $request->input('ruta_comando');
        $dispositivos = $request->input('dispositivo');

        $disp= Dispositivos::all();
        $comando=Comando::find($id_comando);
        return view('Comandos.actualizar_comando', compact('disp', 'comando'));

    }

    public function actualizar_comando_guardar(Request $request)
    {
        $id_comando = $request->input('id_comando');
        $descripcion_comando = $request->input('descripcion_comando');
        $ruta_comando = $request->input('ruta_comando');
        $dispositivos =$request->input('dispositivo');

        $comando= Comando::find($id_comando);
        $comando->descripcion_comando=$descripcion_comando;
        $comando->ruta_comando=$ruta_comando;
        $comando->dispositivo_id_dispositivo=$dispositivos;
        $comando->save();

        return redirect()->action('ComandoController@comandos');
    }

    public function eliminar_comando(Request $request){

        $id_comando=$request->input('id_comando');
        $comando=Comando::find($id_comando);
        $comando->delete();
        
        return redirect()->action('ComandoController@comandos');
    }
}
