<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tipos_dispositivos;// esto seria tipo una instancia como hacimos en java

class TiposDispositivosController extends Controller
{

    public function tiposDeDispositivos()
    {

        $tiposDeDispositivos = Tipos_dispositivos::all();

        return view('TiposDispositivos.tipos-de-dispositivos', compact("tiposDeDispositivos"));

        
    }


    public function insertar_tipo_dispositivos()
    {
        return view('TiposDispositivos.agregar-tipo-dispositivos');
    }


    public function insertar_tipo_dispositivos_guardar(Request $request)
    {
    
        $descripcion =$request->input("descripcion");

        $tipoDeDispositivo = new Tipos_dispositivos();

        $tipoDeDispositivo->descripcion_tipo_dispositivo = $descripcion;

        $tipoDeDispositivo->save();

        return redirect()->action('TiposDispositivosController@tiposDeDispositivos');
    }


    public function actualizar_tipo_dispositivos(Request $request)
    {
      
          $id = $request->input("id_tipo_dispostivo");

          $tipoDeDispositivo = Tipos_dispositivos::find($id);
          return view("TiposDispositivos.actualizar-tipo-dispositivos", compact("tipoDeDispositivo"));
    }


    public function actualizar_tipo_dispositivos_guardar(Request $request)
    {
        $id = $request->input("id_tipo_dispostivo");
        $descripcion = $request->input("descripcion");

        $tipoDeDispositivo = Tipos_dispositivos::find($id);
        $tipoDeDispositivo->descripcion_tipo_dispositivo = $descripcion;

        $tipoDeDispositivo->save();

         return redirect()->action('TiposDispositivosController@tiposDeDispositivos');

    }


    public function eliminar_tipo_dispositivos(Request $request)
    {
            $id = $request->input("id_tipo_dispostivo");
            $tipoDeDispositivo = Tipos_dispositivos::find($id);
            
            $tipoDeDispositivo->delete();
            return redirect()->action('TiposDispositivosController@tiposDeDispositivos');
    }

}
