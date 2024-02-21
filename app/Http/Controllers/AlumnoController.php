<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{

    public function index(){
        //Metodo que devuelve todos los registros en la tabla mapeada en el modelo Alumno
        $alumnos = Alumno::all();
        return view('home', compact('alumnos'));
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvoAlumno = new Alumno();
        $nvoAlumno->nombre = $request->input('nombre');
        $nvoAlumno->apellido = $request->input('apellido');
        $nvoAlumno->correo = $request->input('correo');
        $nvoAlumno->telefono = $request->input('telefono');
        $nvoAlumno->direccion = $request->input('direccion');
        $nvoAlumno->codigoCarrera = $request->input('codigoCarrera');
        $nvoAlumno->fechaNac = $request->input('fechaNac');
        $nvoAlumno->numeroCuenta = $request->input('numeroCuenta');
        $nvoAlumno->save();

        $alumnos = Alumno::all();

        return redirect('/');


    }

}
