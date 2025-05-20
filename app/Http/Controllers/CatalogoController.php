<?php

namespace App\Http\Controllers;
use App\Models\Catalogo;
use App\Models\Usuario;
use Illuminate\Http\Request;
class CatalogoController extends Controller
{

    public function inicio(){
        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            return view("pages.inicio",["titulo"=>"Inicio"]);
        }
        
    }
    public function lista(){
        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            $consulta = Catalogo::get();
        /* $consulta = Catalogo::all();
        $consulta = Catalogo::get(); */
        /* $consulta2 = new Catalogo();
        $datos = $consulta2->all(); */
        $datos = $consulta;

        return view("pages.lista_pelicula",["titulo"=>"Lista Peliculas","datos"=>$datos]);
        }
        
    }
    public function agregar(){
        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            return view("pages.agregar",["titulo"=>"Agregar"]);
        }
        
    }
    public function editar(Request $request){

         $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            $consulta = Catalogo::where("id",$request->id)->first();
            return view("pages.editar",["titulo"=>"Editar Pelicula","pelicula"=>$consulta]);
        }

        
    }

    

    public function actualizar(Request $request, Catalogo $pelicula){
        

        $request->validate(
        ['titulo' => 'required|string|max:100', 
            'descripcion' =>'required|string|max:250',
            'genero'=>'required|string|max:30',
            'director' => 'required|string|max:250',
            'fecha_estreno'=> 'required'],
            [
                        "fecha_estreno.required"=> "*Falta fecha"
        ]
        );

        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            $pelicula->titulo = $request->titulo;
            $pelicula->descripcion = $request->descripcion;
            $pelicula->genero = $request->genero;
            $pelicula->director = $request->director;
            $pelicula->fecha_estreno = $request->fecha_estreno;
            $pelicula->save();
            return redirect()->route("lista");
        }
        
    }
    public function insertar(Request $request, Catalogo $pelicula){
        
        $request->validate(
        ['titulo' => 'required|string|max:100', 
            'descripcion' =>'required|string|max:250',
            'genero'=>'required|string|max:30',
            'director' => 'required|string|max:250',
            'fecha_estreno'=> 'required'],
            [
            
            "fecha_estreno.required"=> "*Falta fecha"
        ]
        );

        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->genero = $request->genero;
        $pelicula->director = $request->director;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->save();
        return redirect()->route("lista");
        }

        
       
        
        
    }
    public function eliminar(Request $request, Catalogo $pelicula){
        
        $sesionUsuario = session('sesionUsuario');

        if($sesionUsuario == ""){
            return view("pages.sesion",["titulo"=>"login"]);
        }else{
            $pelicula = Catalogo::where("id",$request->id)->first();
        $pelicula->delete();
        return redirect()->route("lista");
        }
        
        
        
    }

    
    


    

   
    
}