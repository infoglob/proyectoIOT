<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Collection;



// MODELOS
use App\Usuario;


class LoginController extends Controller
{


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // MÉTODO
    public function login()
    {

        return view('Login.login');

    }


    // MÉTODO
    public function iniciarSesion(Request $request)
    {
        $validatedData = $request->validate([
        'nombre_de_usuario' => ['max:50', 'required'],
        'password' => ['max:20', 'required']
        ]);


        // INICIALIZAR VARIABLES
        $nombreDeUsuarioInput = $request->input("nombre_de_usuario");
        $passwordInput = $request->input("password");

        // VERIFICAR SI EL NOMBRE DE USUARIO EXISTE EN LA BASE DE DATOS
        $usuario = Usuario::where("usuario", $nombreDeUsuarioInput)->get();
        
        $elNombreDeUsuarioExiste = $usuario->count();

        if($elNombreDeUsuarioExiste == 1)
        {

            // VERIFICAR SI LA CONTRASEÑA ES CORRECTA

            if($usuario[0]->password == $passwordInput)
            {

                // CONTRASEÑA CORRECTA
                
                $idUsuario = $usuario[0]->id_usuario;

                $nick_user = $usuario[0]->usuario;

                $nombre_user = $usuario[0]->nombre;
               /* $nombre_user = DB::table('usuarios')
                     ->select('nombre')
                     ->where('id_usuario', '=', $idUsuario)
                     ->get();*/
                session(['id_usuario' => $idUsuario]);
                session(['nombre' => $nombre_user]);
                session(['usuario' => $nick_user]);
                // RETORNAR VISTA ===========================================
                return redirect()->action('PanelController@dispPorUsuariosAsignados');
          
            }
            else
            {

                $estado = [
                    'tipoDeMensaje'  => 2,
                    'tituloDeMensaje'   => 'Un error ha ocurrido',
                    'mensaje' => 'Nombre de usuario o contraseña incorrecta'
                ];

                return redirect()->back()->with($estado);

            }

        }
        else
        {

            // EL NOMBRE DE USUARIO NO EXISTE EN LA BASE DE DATOS

            // RETORNAR VISTA ===========================================
            $estado = [
                'tipoDeMensaje'  => 2,
                'tituloDeMensaje'   => 'Un error ha ocurrido',
                'mensaje' => 'Nombre de usuario o contraseña incorrecta'
            ];

            return redirect()->back()->with($estado);

        }

    }


}
