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
        $TiposDeDispositivos = Tipos_dispositivos::all();

        //'Dipositivos' hace referencia a la clase del modelo
        //'agregar_dispositivo' al nombre de esta función
        //'compact' convierte el valor de la variable en array
        return view("Dispositivos.agregar-dispositivos", compact("TiposDeDispositivos"));
    }

    public function agregar_dispositivo_guardar(Request $request)
    {
        // creacion de variables
        $dispositivo;
        $ipDispositivo;
        $macDispositivo;
        $tipoDispositivo;

        $dispositivo = mb_strtoupper($request->input("dispositivo"));
        $ipDispositivo = mb_strtoupper($request->input("ip_disp"));
        $macDispositivo = mb_strtoupper($request->input("mac_disp"));
        $tipoDisp=mb_strtoupper($request->input("id_tipo_de_dispositivo"));


        $disp = new Dispositivos();
        $disp->descripcion_dispositivo = $dispositivo;
        $disp->ip = $ipDispositivo;
        $disp->mac = $macDispositivo;
        $disp->tipos_dispositivos_id_tipo_dispostivo=$tipoDisp;

        // guardo en la base de datosS
        $disp->save();

        return redirect()->action('DispositivosController@dispositivos')->with($estado);
    }


    public function actualizar_dispositivo(Request $request)
    {
    

       // INICIALIZA VARIABLES 
      $idDispositivo = $request->input("id");
      // $dispositivo = mb_strtoupper($request->input("dispositivo"));
      // $ipDispositivo = mb_strtoupper($request->input("ip"));
      // $macDispositivo = mb_strtoupper($request->input("mac"));
      // $tipoDisp=mb_strtoupper($request->input("tipoDeDispositivos"));
      // dd($tipoDisp);

      // BASE DE DATOS
      $tiposDeDispositivos = Tipos_dispositivos::all(); 
      // dd($tiposDeDispositivos);
     // dd(DB::table("dispositivo")->select("*")->where("id_dispositivo", "=", $idDispositivo)->get());
      $dispositivo = Dispositivos::find($idDispositivo);

      // RETORNAR A LA VISTA 
      return view("Dispositivos.actualizar-dispositivo", compact("dispositivo", "tiposDeDispositivos"));

    }


    public function actualizar_dispositivo_guardar(Request $request)
    {
        $id = $request->input("id_dispositivo");
        $descrip_dispositivo = $request->input("dispositivo");
        $ip_dispositivo = $request->input("ipDispositivo");
        $mac_dispositivo = $request->input("macDispositivo");
        // $descrip_dispositivo = $request->input("dispositivo");

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
