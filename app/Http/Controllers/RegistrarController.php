<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class RegistrarController extends Controller
{
    public function registro(){
        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.registro",["titulo"=>"Registro"]);
        }else{
            return view("pages.inicio",["titulo"=>"Inicio"]);
        }
        
    }
    
    public function registro_usuario(Request $request, Usuario $usuario){ 
        /*  Cosas que no sabia :v 
            regex: --->  para agregar expreciones regulares
               |   --->  para agregar mas validaciones
            samw:  --->  para compara con password */
        $request->validate(
        ['nombre' => 'required|string|max:255', 
            'usuario' =>'required|string|max:30',
            'email'=>'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/',
            'password_confir'=> 'required|same:password']
        );

        //$usuario = Usuario::where('usuario', $request->usuario)->first();

        
    
        $usuario->nombre = $request->nombre;
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->password_confir = bcrypt($request->password_confir);
        //bcrypt  ---> para encriptar una contraseña
        $usuario->save();
        return redirect()->route("inicio");
    }

    
}
