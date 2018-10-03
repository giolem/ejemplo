<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //la primera funcion general es index
    public function inicio(){
        //Llamamos todos los datos del modelo Nota en la base de datos
        $notas =App\Nota::all();
        return view('welcome', compact('notas'));

    }
    public function fotos(){
        return view('fotos');
    }
    public function nosotros($nombre=null){
        $equipo=['ignacio', 'juanito', 'pedrito', 'joaquin' ];
        //equipo puede viajar hacia la vista con un array asociativo con $equipo=>equipo
        //return view ('nosotros', ['equipo'=>$equipo]); 
        //con blade
        return view ('nosotros', compact('equipo', 'nombre'));
        //compact nos permite usar el array sin doble asignacion
    }
    public function blog(){
        return view('blog');
    }
    
    public function login(){
        return view('login');
    }
}
