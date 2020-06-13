<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dispositivos;
use App\Tipos_dispositivos;


class DispositivosController extends Controller
{

    public function dispositivos()
    {
        $dispositivos = Dispositivos::all();
        
       // dd($dispositivos); //mira, aca imprimo primero para ver que es lo que estoy pasando

        return view("Dispositivos.dispositivos", compact("dispositivos"));
    }


    public function agregar_dispositivo()
    {
        $tiposDeDispositivos = Tipos_dispositivos::all();
  
        return view("Dispositivos.agregar-dispositivos", compact("tiposDeDispositivos"));
    }

    public function agregar_dispositivo_guardar(Request $request)
    {

        $dispositivo = $request->input("descripcion");
        $ipDispositivo = $request->input("ip");
        $macDispositivo = $request->input("mac");
        $tipoDisp=$request->input("TiposDispositivos");


        $disp = new Dispositivos();
        $disp->descripcion_dispositivo = $dispositivo;
        $disp->ip = $ipDispositivo;
        $disp->mac = $macDispositivo;
        $disp->tipos_dispositivos_id_tipo_dispostivo=$tipoDisp;

   
        $disp->save();

        return redirect()->action('DispositivosController@dispositivos');
    }


    public function actualizar_dispositivo(Request $request)
    {
    

      $idDispositivo = $request->input("id_dispositivo");

      $tiposDeDispositivos = Tipos_dispositivos::all(); 

      $dispositivo = Dispositivos::find($idDispositivo);

      return view("Dispositivos.actualizar-dispositivo", compact("dispositivo", "tiposDeDispositivos"));

    }

    public function actualizar_dispositivo_guardar(Request $request){

  
        $idDispositivo = $request->input("idDispositivo");
        $dispositivo = $request->input("dispositivo");
        $ipDispositivo = $request->input("ip");
        $macDispositivo = $request->input("mac");
        $tipoDisp= $request->input("id_tipo_de_dispositivo");
    
        
        $disp = Dispositivos::find($idDispositivo);
        $disp->dispositivo = $dispositivo;
        $disp->ipDispositivo = $ipDispositivo;
        $disp->macDispositivo = $macDispositivo;
        $disp->TiposDispositivos_idTiposDispositivos =$tipoDisp;
    
        $disp->save();
    
        return redirect()->action('DispositivosController@dispositivos');
    
        }

        public function eliminar_dispositivo(Request $request){
            $id = $request->input("id_dispositivo");
            $dispositivo = Dispositivos::find($id);
            
            $dispositivo->delete();
            return redirect()->action('DispositivosController@dispositivos');
        }

}
