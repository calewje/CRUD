<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function sesion(){

        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            return view("pages.inicio",["titulo"=>"inicio"]);
        }
        
    }

    public function iniciar_sesion(Request $request, Usuario $usuario){
        /* $usuario = Usuario::where("usuario",$request->usuario)->first(); */
        $request->validate([
            "usuario"=> "required|string|regex:/^[A-Za-z0-9]+$/",   
            "password"=> "required|string"
        ],
        [
            "usuario.regex"=> "*El usuario solo puede contener letras y números",
            "usuario.required"=> "*El usuario es requerido",
            "password.required"=> "*La contraseña es requrida"
        ]);
        $usuario = Usuario::where('usuario', $request->usuario)->first();

        if ($usuario) {
            if(password_verify($request->password, $usuario->password)){
                $request->session()->put('sesionUsuario',$request->usuario); 
                $usuario->save();
                return redirect()->route("inicio");
            }else{
                throw ValidationException::withMessages(["password"=> "contraseña incorrecta"]);
            }
        } else {
            throw ValidationException::withMessages(["usuario"=> "usuario no encontrado"]);
        }
    //$usuario && Hash::check($request->password, $usuario->password);
    

        
    }

    public function cerrar_sesion(Request $request){
        Auth::logout(); // Cierra la sesión del usuario

    // Invalida la sesión y regenera el token CSRF
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirige al login o a donde desees
    return redirect()->route('sesion');
    }
}