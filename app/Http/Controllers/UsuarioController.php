<?php

namespace App\Http\Controllers;

use App\Permiso;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios(){
        $usuario=Usuario::all();
        return view('Usuarios.listarUsuarios', compact('usuario'));
    }

    public function agregar_usuario(){
        return view("Usuarios.agregar_usuario");
    }

    public function agregar_usuario_guardar(Request $request){
          
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellido');
        $nro_doc=$request->input('nro_doc');
        $usuario=$request->input('usuario');
        $password=$request->input('password');

        
        $usuarios=new Usuario();
        $usuarios->nombre=$nombre;
        $usuarios->apellido=$apellido;
        $usuarios->nro_doc=$nro_doc;
        $usuarios->usuario=$usuario;
        $usuarios->password=$password;
        $usuarios->save();

        return redirect()->action('UsuarioController@agregar_usuario');
    }

 
      public function actualizar_usuario(Request $request){

            $id_usuario= $request->input('id_usuario');
            $nombre=$request->input('nombre');
            $apellido=$request->input('apellido');
            $nro_doc=$request->input('nro_doc');
            $usuario=$request->input('usuario');
            $password=$request->input('password');

            $usuarios=Usuario::find($id_usuario);

            return view('Usuarios.actualizar_usuario', compact('usuarios'));
    }

    public function actualizar_usuario_guardar(Request $request){

        $id_usuario= $request->input('id_usuario');
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellido');
        $nro_doc=$request->input('nro_doc');
        $usuario=$request->input('usuario');
        $password=$request->input('password');

        $usuarios=Usuario::find($id_usuario);
        $usuarios->nombre=$nombre;
        $usuarios->apellido=$apellido;
        $usuarios->nro_doc=$nro_doc;
        $usuarios->usuario=$usuario;
        $usuarios->password=$password;
        $usuarios->save();

        return redirect()->action('UsuarioController@usuarios');

    }

    public function eliminar_usuario(Request $request){

        $idUsuario=$request->input('id_usu');

        $usuarios=Usuario::find($idUsuario);

        $usuarios->delete();

        return redirect()->action('UsuarioController@usuarios');

    }

    //Permisos de usuarios
    // MÉTODO P/ AGG PERMISOS
    public function asignacionDePermisosDeUsuario(Request $request)
    {
        $id_usuario = $request->input("id_usuario");
        //dd($id_usuario);
        $permisos = Permiso::all();
        //dd($permisos);
        $usuario = Usuario::find($id_usuario);
        //dd($usuario);
        $permisos_filtrado = collect();
        //dd($permisos_filtrado);

        //Filtrar los permisos seleccionados
        foreach ($permisos as $key)
        {
    
          if(!($usuario->permisos->contains($key->id_permiso)))
          {
            $permisos_filtrado->push(["id_permiso" => $key->id_permiso, "descripcion_permiso" => $key->descripcion_permiso, "ruta_permiso" => $key->ruta_permiso]);
          }
    
        }
        
        // Retorna al formulario de agregar permiso al usuario
        return view("Usuarios.asignacion-de-permisos-de-usuario", compact("id_usuario", "permisos_filtrado", "usuario"));

    }

       public function agregar_permiso_usuario(Request $request)
       {

           $idUsuario = $request->input("id_usuario");
           $idPermiso = $request->input("id_permiso");
           $usuario = Usuario::find($idUsuario);
 
           $usuario->permisos()->attach($idPermiso);

           return redirect()->action('UsuarioController@usuarios');
   
       }

       public function eliminar_permiso_usuario(Request $request)
       {

           $idUsuario = $request->input("idUser");
           $idPermiso = $request->input("idPer");
           $usuario = Usuario::find($idUsuario);

           $usuario->permisos()->detach($idPermiso);
           

           return redirect()->action('UsuarioController@usuarios');
   
       }
}
