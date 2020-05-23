<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Profe;
use App\Nota;
use App\Curso;

class ORMController extends Controller {

    public function listadoalumnos() {
        $alumnos = Alumno::all();

        foreach ($alumnos as $alumno) {
            echo "<b>Nombre el alumno</b>:" . $alumno->nombre . "</br>";
            echo "<b>Apellido del alumno</b>: " . $alumno->apellidos . "</br>";
            echo "<b>DNI</b>: " . $alumno->dni . "</br>";
            echo "<b>Telefono</b>: " . $alumno->telefono . "</br>";
            echo "<b>Id del curso</b>: " . $alumno->curso_id . "</br><hr>";
        }
    }

    public function fichacurso($id) {
        $curso = Curso::find($id);
        echo "<b>Nombre del curso</b>:" . $curso->nombre . "</br>";
        echo "<b>Valoracion Dificultad</b>: " . $curso->dificultad . "</br>";
        echo "<b>Fecha Inicio</b>: " . $curso->inicio . "</br>";
        echo "<b>Horas Estimadas</b>: " . $curso->horas . "</br>";
        echo "<b>Id del profesor</b>: " . $curso->profe_id . "</br><hr>";
    }

    public function cursoexpress() {
        $cursos = Curso::where("horas", "<", "40")
                ->orderBy("inicio", "asc")
                ->get();
        foreach ($cursos as $curso) {
            echo "<b>Nombre del curso</b>:" . $curso->nombre . "</br>";
            echo "<b>Valoracion Dificultad</b>: " . $curso->dificultad . "</br>";
            echo "<b>Fecha Inicio</b>: " . $curso->inicio . "</br>";
            echo "<b>Horas Estimadas</b>: " . $curso->horas . "</br>";
            echo "<b>Id del profesor</b>: " . $curso->profe_id . "</br><hr>";
        }
    }

    public function extractonotas() {
        $notaAlta = Nota::orderBy("nota", "desc")->first();
        $notaBaja = Nota::orderBy("nota", "asc")->first();
        echo "<b>La nota mas alta es:</b>: " . $notaAlta->nota . "</br>";
        echo "<b>y el id que le corresponde es: </b>: " . $notaAlta->alumno_id . "</br><hr>";
        echo "<b>La nota mas baja es:</b>: " . $notaBaja->nota . "</br>";
        echo "<b>y el id que le corresponde es: </b>: " . $notaBaja->alumno_id . "</br><hr>";
    }

    public function listadoD() {
        $alumnos = Alumno::where("apellidos", "like", "% D%")->get();
        foreach ($alumnos as $alumno) {
            echo "<b>Nombre del alumno</b>:" . $alumno->nombre . "</br>";
            echo "<b>VApellidos del Alumno</b>: " . $alumno->apellidos . "</br>";
            echo "<b>Dni</b>: " . $alumno->dni . "</br>";
            echo "<b>Telefono</b>: " . $alumno->telefono . "</br>";
            echo "<b>Id del Curso</b>: " . $alumno->curso_id . "</br><hr>";
        }
    }

    public function cursosnuevos() {
        $cursos = Curso::whereYear("inicio", "2020")->get();
        foreach ($cursos as $curso) {
            echo "<b>Nombre del curso</b>:" . $curso->nombre . "</br>";
            echo "<b>Valoracion Dificultad</b>: " . $curso->dificultad . "</br>";
            echo "<b>Fecha Inicio</b>: " . $curso->inicio . "</br>";
            echo "<b>Horas Estimadas</b>: " . $curso->horas . "</br>";
            echo "<b>Id del profesor</b>: " . $curso->profe_id . "</br><hr>";
        }
    }

    public function altascursos() {
        $hoy = date("Y-m-d");
        $cantidad = 0;

        $curso = new Curso;

        $curso->nombre = "Wordpress";
        $curso->dificultad = 2;
        $curso->inicio = $hoy;
        $curso->horas = 30;
        $curso->profe_id = 2;
        $curso->save();
        $cantidad++;

        $curso = new Curso;
        $curso->nombre = "Photoshop";
        $curso->dificultad = 3;
        $curso->inicio = $hoy;
        $curso->horas = 40;
        $curso->profe_id = 1;
        $curso->save();
        $cantidad++;

        $curso = new Curso;
        $curso->nombre = "DreamWeaber";
        $curso->dificultad = 2;
        $curso->inicio = $hoy;
        $curso->horas = 25;
        $curso->profe_id = 4;
        $curso->save();
        $cantidad++;

        $curso = new Curso;
        $curso->nombre = "freehand";
        $curso->dificultad = 2;
        $curso->inicio = $hoy;
        $curso->horas = 25;
        $curso->profe_id = 5;
        $curso->save();
        $cantidad++;

        echo " $cantidad Cursos insertados correctamente";
    }

    public function altasalumnos() {
        $contador = 0;
        Alumno::create([
            "nombre" => "Clara",
            "apellidos" => "Suarez Domingo",
            "dni" => "75414122F",
            "telefono" => "935881140",
            "curso_id" => 10
        ]);
        $contador++;
        Alumno::create([
            "nombre" => "Jesus",
            "apellidos" => "del campo campo",
            "dni" => "53301244R",
            "telefono" => "934321440",
            "curso_id" => 10
        ]);
        $contador++;
        Alumno::create([
            "nombre" => "Pedro",
            "apellidos" => "Benitez Hermoso",
            "dni" => "39072332F",
            "telefono" => "938724500",
            "curso_id" => 11
        ]);
        $contador++;
        Alumno::create([
            "nombre" => "Andres",
            "apellidos" => "Mendez Solas",
            "dni" => "sin datos",
            "telefono" => "sin datos",
            "curso_id" => 12
        ]);
        $contador++;
        Alumno::create([
            "nombre" => "Laura",
            "apellidos" => "Torres Altas",
            "dni" => "68552405S",
            "telefono" => "934212121",
            "curso_id" => 12
        ]);
        $contador++;
        Alumno::create([
            "nombre" => "Tomas",
            "apellidos" => "Muños Muños",
            "dni" => "68442405S",
            "telefono" => "93581140",
            "curso_id" => 66
        ]);
        $contador++;
        echo "$contador Registros agregados correctamente";
    }

    public function altasprofes() {
        Profe::create(["nombre" => "Eva", "apellidos" => "Rosas Torno", "alumno_id" => 9, "curso_id" => 10, "profe_id" => 2]);
        Profe::create(["nombre" => "Ricardo", "apellidos" => "JarrÃ³n Barro", "alumno_id" => 3, "curso_id" => 9, "profe_id" => 5]);
        Profe::create(["nombre" => "Ricardo", "apellidos" => "JarrÃ³n Barro", "alumno_id" => 11, "curso_id" => 11, "profe_id" => 5]);
        Profe::create(["nombre" => "Ricardo", "apellidos" => "JarrÃ³n Barro", "alumno_id" => 122, "curso_id" => 12, "profe_id" => 5]);

        echo("<h3>Nuevos profesores y cursos asignados</h3>");
    }

    public function altasnotas() {
        Nota::create(["nota" => 4.5, "profe_id" => 2, "curso_id" => 9, "alumno_id" => 9]);
        Nota::create(["nota" => 7.4, "profe_id" => 1, "curso_id" => 10, "alumno_id" => 10]);
        Nota::create(["nota" => 8.8, "profe_id" => 1, "curso_id" => 10, "alumno_id" => 14]);
        Nota::create(["nota" => 5.6, "profe_id" => 4, "curso_id" => 11, "alumno_id" => 12]); /* usar este para borrar temporal y recuperar */
        Nota::create(["nota" => 6.4, "profe_id" => 4, "curso_id" => 11, "alumno_id" => 13]);
        Nota::create(["nota" => 4.7, "profe_id" => 5, "curso_id" => 12, "alumno_id" => 10]);
        Nota::create(["nota" => 9.1, "profe_id" => 5, "curso_id" => 12, "alumno_id" => 12]);
        Nota::create(["nota" => 9.1, "profe_id" => 3, "curso_id" => 666, "alumno_id" => 16]); //usar este para el borrar temporal y definitivo

        echo("<H1>Nuevos examenes realizado introducidos</h1>");
    }

    public function erroralumno() {
        Alumno::where("nombre", "Andres")
                ->where("apellidos", "Mendez Solas")
                ->update([
                    "dni" => "40400909R",
                    "telefono" => "932224563"
        ]);
        echo "REgistro modificado correctamente";
    }

    public function errorprofe() {
        Profe::where("profe_id", 5)
                ->where("curso_id", 12)
                ->update([
                    "alumno_id" => 12
        ]);
        echo "REgistro modificado correctamente";
    }

    public function BorrarNotas() {
        Nota::where("alumno_id", 12)
                ->where("curso_id", 11)
                ->delete();
        echo "registro eliminado correctamente";
    }

    public function mostrarpapelera() {
        $notas = Nota::onlyTrashed()->get();
        foreach ($notas as $nota) {
            echo "<b>ID</b>:" . $nota->id . "</br>";
            echo "<b>ID profesor</b>: " . $nota->profe_id . "</br>";
            echo "<b>ID Curso</b>: " . $nota->curso_id . "</br>";
            echo "<b>ID Alumno</b>: " . $nota->alumno_id . "</br>";
            echo "<b>nota</b>: " . $nota->nota . "</br>";
            echo "<b>Fecha de eliminacion</b>: " . $nota->deleted_at . "</br><hr>";
        }
    }

    public function vaciado() {
        Nota::withTrashed()
                ->where("curso_id", 66)
                ->forceDelete();
        echo "registro eliminado permanentemente";
    }

    /* Ejercicios relaciones ORM Eloquent */

    public function datos_profe_curso($id_curso) {
        $curso = Curso::find($id_curso);
        $profesor = Curso::find($id_curso)->profe;
        echo "<b><i>Los datos del profesor correspondiente al curso " . $curso->nombre . " ($id_curso) son:</i></b> <br>";
        echo "<ul>";
        echo "<li><i>Id del Profesor: </i>" . $profesor->profe_id . "</li>";
        echo "<li><i>Nombre del Profesor: </i>" . $profesor->nombre . "</li>";
        echo "<li><i>Apellidos del Profesor: </i>" . $profesor->apellidos . "</li>";
    }

    public function alumnos_cursos($id_curso) {
        $curso = Curso::find($id_curso);
        $alumnos = Curso::find($id_curso)->alumnos;
        echo "<h1>Curso de: <sub>" . $curso->nombre . "</sub></h1>";
        
         echo "<b>Fecha de inicio:</b> " .date("Y-m-d",strtotime($curso->created_at)) . " <b>- Numero de horas; </b>".$curso->horas;
            
            echo "<h3>Alumnos Apuntados</h3><hr>";
        foreach($alumnos as $alumno) {
           
            echo "<b><i>Id del alumno: </i></b>" . $alumno->id . "<br>";
            echo "<b><i>Nombre del alumno: </i></b>" . $alumno->nombre . "<br>";
            echo "<b><i>Apellidos del alumno: </i></b>" . $alumno->apellidos . "<br>";
            echo "<b><i>DNI: </i></b>" . $alumno->dni . "<br>";
            echo "<b><i>Telefono: </i></b>" . $alumno->telefono . "<hr>";
        }
    }
    public function profes_cursos($id_profe) {
        $profe = Profe::find($id_profe);
        $cursos = Profe::find($id_profe)->cursos;
        echo "<h1>Profesor: " . $profe->nombre ." ". $profe->apellidos."</h1>";
        
        
            echo "<h3>Cursos Asignados</h3><hr>";
        foreach($cursos as $curso) {
           
            echo "<b><i>Id del curso: </i></b>" . $curso->curso_id . "<br>";
            echo "<b><i>Nombre del curso: </i></b>" . $curso->nombre . "<br>";
            echo "<b><i>Fecha de inicio: </i></b>" . date("Y-m-d",strtotime($curso->created_at)) . "<hr>";
        }
    }
    public function alumnos_notas($id_alumno){
        $alumno = Alumno::find($id_alumno);
        $notas = Alumno::find($id_alumno)->notas;
        echo "<h1>Nombre del alumno: ".$alumno->nombre." ".$alumno->apellidos."</h1><br>";
        foreach ($notas as $nota){
                 echo "<b><i>Id del Examen Realizado: </i></b>" . $nota->id . "<br>";
            echo "<b><i>Nota del Examen: </i></b>" . $nota->nota . "<br><hr>";
        }
    }
}
