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
    
        //Acá recuperamos el valor del input de descripcion con la variable request que recibimos como parametro, tiene que estar asociado con el name
        $descripcion = mb_strtoupper($request->input("descripcion"));
    
        //se hace la consulta 
        $tipoDeDispositivo = new Tipos_dispositivos();
        //accedemos en la propiedad descripcion_tipo_dispositivo
        $tipoDeDispositivo->descripcion_tipo_dispositivo = $descripcion;
    
        //guarda en la base de datos
        $tipoDeDispositivo->save();
        
        //llamamos al metodo de listar
        return redirect()->action('TiposDispositivosController@tiposDeDispositivos');
    }


    public function actualizar_tipo_dispositivos(Request $request)
    {
      
       //Acá recuperamos el valor del input de descripcion con la variable request que recibimos como parametro, tiene que estar asociado con el name
        //Para probar podes parar tu servidor y iniciar de nuevo
          $id = $request->input("id");
          //acá buscamos ese id en la bd con  ::find()

          $tipoDeDispositivo = Tipos_dispositivos::find($id);

          // nos envia en la vsita con los valores recuperados de la bd
          return view("TiposDispositivos.actualizar-tipo-dispositivos", compact("tipoDeDispositivo"));
    }


    public function actualizar_tipo_dispositivos_guardar(Request $request)
    {
        $id = $request->input("id");
        $descripcion = $request->input("descripcion");

        $tipoDeDispositivo = Tipos_dispositivos::find($id);
        $tipoDeDispositivo->descripcion_tipo_dispositivo = mb_strtoupper($descripcion);

        $tipoDeDispositivo->save();

         return redirect()->action('TiposDispositivosController@tiposDeDispositivos');

    }


    public function eliminar_tipo_dispositivos(Request $request)
    {
            $id = $request->input("id");
            $tipoDeDispositivo = Tipos_dispositivos::find($id);
            
            $tipoDeDispositivo->delete();
            return redirect()->action('TiposDispositivosController@tiposDeDispositivos');
    }

}
