<?php

namespace App\Http\Controllers;

use App\Comando;
use App\Dispositivos;
use App\Usuario;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function inicio_panel(){
        $usuario=Usuario::orderBy('nombre', 'desc')->get();
        $nombreUsu=session('nombre');
        return view('Panel_Control.panel_control', compact('nombreUsu', 'usuario'));
    }


    public function dispPorUsuariosAsignados(){

        $id = session("id_usuario");
        $usuario = Usuario::find($id);
        $comandos = Comando::all();
        return view("Panel_Control.dispositivo_asig_por_usuario", compact("usuario", "comandos"));

    }

    public function ver_usu_dispositivo(Request $request){

        $id_usuario=$request->input('id_usuario');
        $dispositivos=Dispositivos::all();
        $usuario = Usuario::find($id_usuario);
        $dispositivos_filtrado=collect();

        foreach ($dispositivos as $key)
        {
    
            if(!($usuario->dispositivos->contains($key->id_dispositivo)))
            {
                $dispositivos_filtrado->push(["id_dispositivo" => $key->id_dispositivo, "descripcion_dispositivo" => $key->descripcion_dispositivo]);
            }
    
        }
        return view('Panel_Control.ver_dispositivo_panel', compact("usuario", "dispositivos", "dispositivos_filtrado"));

    }

    public function agregar_dispositivo_panel(Request $request){

        $id_usuario=$request->input('id_usuario');
        $id_dispositivo=$request->input("id_dispositivo");
       

        $usuario = Usuario::find($id_usuario);
     

        $usuario->dispositivos()->attach($id_dispositivo);
 
        return redirect()->action('PanelController@inicio_panel');
    }

    public function quitar_dispositivo_panel(Request $request){

        $id_usuario= $request->input('id_usuario');
        $id_dispositivo= $request->input('id_dispositivo');
        $usuario=Usuario::find($id_usuario);

        $usuario->dispositivos()->detach($id_dispositivo);

        return redirect()->action('PanelController@inicio_panel');
    }
}
