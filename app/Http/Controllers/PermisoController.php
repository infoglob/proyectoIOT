<?php

namespace App\Http\Controllers;

use App\Permiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisoController extends Controller
{
    public function permisos(){
        $permiso = Permiso::all();

        return view("Permisos.listar_permiso", compact("permiso"));
    }

    public function agregar_permiso(){

        return view("Permisos.agregar_permiso");
    
    }

    public function agregar_permiso_guardar(Request $request){

        $descripcion_permiso = $request->input('descripcion_permiso') ;
        $ruta_permiso = $request->input('ruta_permiso');

        $permiso=new Permiso();
        $permiso->descripcion_permiso=$descripcion_permiso;
        $permiso->ruta_permiso=$ruta_permiso;
        $permiso->save();

        return redirect()->action('PermisoController@permisos');
    }

    public function actualizar_permiso(Request $request){
        $id_permisos = $request->input('id_per');
        $descripcion_permiso = $request->input('descripcion_permiso');
        $ruta_permiso = $request->input('ruta_permiso');
        
        $permiso = Permiso::find($id_permisos);
        //$permiso = DB::table("permisos")->select("*")->where("id_permiso", "=", $id_permisos);
        return view('Permisos.actualizar_permiso', compact('permiso'));

    }

    public function actualizar_permiso_guardar(Request $request)
    {
        $id_permisos = $request->input('id_permiso');
        $descripcion = $request->input('descripcion_permiso');
        $ruta_permiso = $request->input('ruta_permiso');

        $permiso = Permiso::find($id_permisos);
        $permiso->descripcion_permiso = $descripcion;
        $permiso->ruta_permiso=$ruta_permiso;
        $permiso->save();

        return redirect()->action('PermisoController@permisos');
    }

    public function eliminar_permiso(Request $request){

        $id_permiso=$request->input('id_permiso');
        $permiso=Permiso::find($id_permiso);
        $permiso->delete();
        
        return redirect()->action('PermisoController@permisos');
    }

}   
