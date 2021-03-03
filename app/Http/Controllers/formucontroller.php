<?php

namespace App\Http\Controllers;

use App\Models\Fecha;
use App\Models\Usuario;
use Illuminate\Http\Request;

class formucontroller extends Controller
{
    public function create()
    {
        return view('formu.create');
    } 

    public function send(Request $request)

    {
     
     $request->validate([
         'nombre'=> 'required',
         'apellidos'=> 'required',
         'telefono'=> 'required|min:7',
         'correo'=> 'required|email',
         'fecha'=> 'required',

     ]); 

    $usuarios=new Usuario() ;
    $usuarios->nombres=$request->nombre;
    $usuarios->apellidos=$request->apellidos;
    $usuarios->telefono=$request->telefono;
    $usuarios->correo=$request->correo;
    $usuarios->save();

    
    $fechas=new Fecha();
    $fechas->fecha=$request->fecha;
    $fechas->save();
    
    return redirect()->route('formulario.crea');
    }
    
    public function formula(Request $request)
    {

       dd($request->date);
    }

}
