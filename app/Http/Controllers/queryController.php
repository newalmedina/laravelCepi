<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    public function altascursos(){
        $cursos = DB::table("cursos")
                ->insert([["nombre"=>"HTMl",
                    "dificultad"=>2,
                    "inicio"=>"2019-01-01",
                    "horas"=> 40 ,
                    "profe_id"=>1],
                    ["nombre"=>"CSS",
                    "dificultad"=>2,
                    "inicio"=>"2019-03-01",
                    "horas"=>30 ,
                    "profe_id"=>1],
                    ["nombre"=>"BootStrap",
                    "dificultad"=>3,
                    "inicio"=>"2019-05-15",
                    "horas"=> 25,
                    "profe_id"=>2],
                    ["nombre"=>"JavaScript",
                    "dificultad"=>5,
                    "inicio"=>"2019-07-21",
                    "horas"=>50,
                    "profe_id"=>4],
                    ["nombre"=>"SQL",
                    "dificultad"=>4,
                    "inicio"=>"2019-10-19",
                    "horas"=>25 ,
                    "profe_id"=>3],
                    ["nombre"=>"PHP",
                    "dificultad"=>5,
                    "inicio"=>"2019-12-01",
                    "horas"=>50 ,
                    "profe_id"=>3],
                    ["nombre"=>"Laravel",
                    "dificultad"=>4,
                    "inicio"=>"2020-03-03",
                    "horas"=>40,
                    "profe_id"=>4],
                    ["nombre"=>"Ajax",
                    "dificultad"=>4,
                    "inicio"=>"2020-06-15",
                    "horas"=>30 ,
                    "profe_id"=>2]]);
            if ($cursos) {
                echo "Cursos insertados Correctamente";
            }else{
                echo "Error al ingresar Cursos";
            }
    }
    public function altasalumnos(){
        $alumnos = DB::table("alumnos")
                ->insert([["nombre"=>"Juan",
                    "apellidos"=>"Campos Gil",
                    "dni"=>"44012121G",
                    "telefono"=>"933456789",
                    "curso_id"=>1 ],
                    ["nombre"=>"Eva",
                    "apellidos"=>"Jardin Flores",
                    "dni"=>"42345689H",
                    "telefono"=>"934440101",
                    "curso_id"=>3],
                    ["nombre"=>"Ana",
                    "apellidos"=>"Pardo Diaz",
                    "dni"=>"41010202T",
                    "telefono"=>"934282121",
                    "curso_id"=>7],
                    ["nombre"=>"Carlos ",
                    "apellidos"=>"Martinez Martinez",
                    "dni"=>"75151542F",
                    "telefono"=>"931234877",
                    "curso_id"=>7],
                    ["nombre"=>"Miguel",
                    "apellidos"=>"Soto Real",
                    "dni"=>"65238941T",
                    "telefono"=>"936541001",
                    "curso_id"=>1],
                    ["nombres"=>"Ivan",
                    "apellidos"=>"Lopez Perez",
                    "dni"=>"33214588S",
                    "telefono"=>"933222450",
                    "curso_id"=>4],
                    ["nombre"=>"Paula",
                    "apellidos"=>"Martinez Delgado",
                    "dni"=>"48585858F",
                    "telefono"=>"931124547",
                    "curso_id"=>4],
                    ["nombre"=>"Ramon",
                    "apellidos"=>"Fernandez Cruz",
                    "dni"=>"42561109G",
                    "telefono"=>"934252525",
                    "curso_id"=>5 ]]);
         if ($alumnos) {
                echo "Alumnos insertados Correctamente";
            }else{
                echo "Error al ingresar Alumnos";
            }
    }
    public function altasprofes(){
        $profes=DB::table("profes")
                ->insert([["profe_id"=>1,
                    "nombre"=>"Eduardo",
                    "apellidos"=>"Castillo Llanos",
                    "alumno_id"=>1,
                    "curso_id"=>1],
                    ["profe_id"=>1,
                    "nombre"=>"Eduardo",
                    "apellidos"=>"Castillo Llanos",
                    "alumno_id"=>6,
                    "curso_id"=>2],
                    ["profe_id"=>1,
                    "nombre"=>"Eduardo",
                    "apellidos"=>"Castillo Llanos",
                    "alumno_id"=>5,
                    "curso_id"=>1],
                    ["profe_id"=>2,
                    "nombre"=>"Eva",
                    "apellidos"=>"Rosa Torno",
                    "alumno_id"=>2,
                    "curso_id"=>3],
                    ["profe_id"=>2,
                    "nombre"=>"Carlos",
                    "apellidos"=>"Suarez Manos",
                    "alumno_id"=>8,
                    "curso_id"=>5],
                    ["profe_id"=>4,
                    "nombre"=>"Marcos",
                    "apellidos"=>"Alvarez Diaz",
                    "alumno_id"=>3,
                    "curso_id"=>7],
                    ["profe_id"=>4,
                    "nombre"=>"Marcos",
                    "apellidos"=>"Alvarez Diaz",
                    "alumno_id"=>4,
                    "curso_id"=>7],
                    ["profe_id"=>4,
                    "nombre"=>"Marcos",
                    "apellidos"=>"Alvarez Diaz",
                    "alumno_id"=>7,
                    "curso_id"=>4]
                    ]);
         if ($profes) {
                echo "Profesores insertados Correctamente";
            }else{
                echo "Error al ingresar Profesores";
            }
    }
    public function altasnotas(){
        $notas = DB::table("notas")
                ->insert([["curso_id"=>1,
                    "profe_id"=>1,
                    "alumno_id"=>1,
                    "nota"=>8.7],
                    ["curso_id"=>3,
                    "profe_id"=>2,
                    "alumno_id"=>2,
                    "nota"=>5.9],
                    ["curso_id"=>2,
                    "profe_id"=>3,
                    "alumno_id"=>4,
                    "nota"=>4.4],
                    ["curso_id"=>7,
                    "profe_id"=>4,
                    "alumno_id"=>4,
                    "nota"=>7.5],
                    ["curso_id"=>1,
                    "profe_id"=>5,
                    "alumno_id"=>1,
                    "nota"=>6.5],
                    ["curso_id"=>2,
                    "profe_id"=>6,
                    "alumno_id"=>1,
                    "nota"=>3.2],
                    ["curso_id"=>4,
                    "profe_id"=>7,
                    "alumno_id"=>4,
                    "nota"=>8.0],
                    ["curso_id"=>5,
                    "profe_id"=>8,
                    "alumno_id"=>3,
                    "nota"=>7.5]]);
        if ($notas) {
                echo "Notas insertados Correctamente";
            }else{
                echo "Error al ingresar Notas";
            }
    }
    
    public function mostraralumnos(){
        $alumnos = DB::table("alumnos")->get();
        return view("vistas.mostraralumno", compact("alumnos"));
    }
    public function mostrarcursos(){
        $cursos = DB::table("cursos")->get();
        return view("vistas.mostrarcursos", compact("cursos"));
    }
    public function mostrarprofes(){
        $profes = DB::table("profes")->get();
        return view("vistas.mostrarprofesores", compact("profes"));
    }
    public function mostrarnotas(){
        $notas = DB::table("notas")
                ->join("cursos","cursos.id","=","notas.curso_id")
                ->join("alumnos","alumnos.id","=","notas.alumno_id")
                ->join("profes","profes.profe_id","=","notas.profe_id")
                ->select("notas.nota as nota","cursos.nombre as curso","alumnos.nombre as nombreAlumno","alumnos.apellidos as apellidos","alumnos.id as idAlumno","profes.nombre as nombreProfe")
                ->get();
        return view("vistas.mostrarnotas", compact("notas"));
    }
    
    public function nuevasnotas(){
        DB::table("alumnonotas")
                ->insert([["alumno_id"=>1,
                    "examen_id"=>1,
                    "nota"=>6.50,
                    "fecha"=>"2019-01-01"],
                    ["alumno_id"=>3,
                    "examen_id"=>1,
                    "nota"=>4.50,
                    "fecha"=>"2019-01-01"],
                    ["alumno_id"=>5,
                    "examen_id"=>1,
                    "nota"=>8.50,
                    "fecha"=>"2019-01-01"],
                    ["alumno_id"=>4,
                    "examen_id"=>2,
                    "nota"=>8.00,
                    "fecha"=>"2019-03-01"],
                    ["alumno_id"=>6,
                    "examen_id"=>2,
                    "nota"=>3.25,
                    "fecha"=>"2019-03-01"],
                    ["alumno_id"=>1,
                    "examen_id"=>3,
                    "nota"=>6.50,
                    "fecha"=>"2019-05-11"],
                    ["alumno_id"=>2,
                    "examen_id"=>3,
                    "nota"=>5.50,
                    "fecha"=>"2019-05-11"],
                    ["alumno_id"=>3,
                    "examen_id"=>3,
                    "nota"=>9.00,
                    "fecha"=>"2019-05-11"],
                    ["alumno_id"=>6,
                    "examen_id"=>4,
                    "nota"=>8.75,
                    "fecha"=>"2019-04-13"],
                    ["alumno_id"=>1,
                    "examen_id"=>4,
                    "nota"=>2.50,
                    "fecha"=>"2019-04-13"],
                    ["alumno_id"=>5,
                    "examen_id"=>4,
                    "nota"=>5.00,
                    "fecha"=>"2019-04-13"],
                    ["alumno_id"=>4,
                    "examen_id"=>4,
                    "nota"=>6.00,
                    "fecha"=>"2019-03-01"]]);
        
    return "registros ingresados correctamente";
    
    }
    public function mostrarnotas_por_alumnos(){
        $resultados= DB::table("alumnonotas")
                ->orderBy("alumno_id","asc")
                ->get();
        return view("notasporalumno", compact("resultados"));
    }
}
