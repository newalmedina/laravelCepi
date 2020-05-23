<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get("/bienvenida/{idioma?}",function($idioma="espanol"){
    if ($idioma=="espanol")
    return "<h1>bienvenido al curso de laravel CEPI-BASE</h1>";
    else
        return " <h1>Welcome to the CEPI-BASE Laravel Course</h1>";
})->name("bienini");
Route::get("/acercade",function(){
    return "Descripcion general de  la Web LaravelCEPI";
});
Route::get("/usuarios", function(){
    return "Lista de Usuarioss";
});
Route::get("/usuarios/{id}", function($id){
    return "Mostrando detalles del usuario $id";
})->where("id","[0-9]+");
Route::get("/usuarios/nuevo",function(){
    return "Creando un nuevo usuario";
});

Route::get("/contacto/saludo/{nombre}/{apodo?}",function($nombre,$apodo=null){
    if ($apodo)
         return "Hola $apodo Bienvenido";
    else
         return "Hola $nombre Bienvenido";
    
})->where(['nombre'=>'[a-zA-ZÃ¡Ã©Ã­Ã³Ãº]+', 'apodo'=>'\w{5}']);

Route::get("/welcome",function(){
   return redirect()->route("bienini","ingles");
});*/
/*
Route::resource("form","FormularioController");
Route::get("/saludo/{idioma?}","BienvenidoController@lengua")->where("idioma","[a-zA-Záéíóúñ]+" );
Route::get("/inicio/{id?}","Datoscontroller@inicio")->where("id","[0-9]");
Route::get("/listado/{id?}","Datoscontroller@listado")->where("id","[0-9]");

Route::get("/fotos","OtrosController@fotos");

Route::get('/presenta', function () {
    return view('presenta');
});

Route::get("/query/altasnotas","queryController@altasnotas");
Route::get("/query/altascursos","queryController@altascursos");
Route::get("/query/altasprofes","queryController@altasprofes");
Route::get("/query/altasalumnos","queryController@altasalumnos");


Route::get("/mostraralumnos","queryController@mostraralumnos");
Route::get("/mostrarcursos","queryController@mostrarcursos");
Route::get("/mostrarprofes","queryController@mostrarprofes");
Route::get("/notas","queryController@mostrarnotas");

Route::get("/query/nuevasnotas","queryController@nuevasnotas");
Route::get("/query/notasalumnos","queryController@mostrarnotas_por_alumnos");



        //ORM ELOQUENT
Route::get("/practicasorm/listadoalumnos","ORMController@listadoalumnos");
Route::get("/practicasorm/fichacurso/{id}","ORMController@fichacurso")->where("id","[0-9]+");
Route::get("/practicasorm/cursoexpress","ORMController@cursoexpress");
Route::get("/practicasorm/extractonotas","ORMController@extractonotas");
Route::get("/practicasorm/listadoD","ORMController@listadoD");
Route::get("/practicasorm/cursosnuevos","ORMController@cursosnuevos");

Route::get("/practicasorm/altascursos","ORMController@altascursos");
Route::get("/practicasorm/altasalumnos","ORMController@altasalumnos");
Route::get("/practicasorm/altasprofes","ORMController@altasprofes");
Route::get("/practicasorm/altasnotas","ORMController@altasnotas");
Route::get("/practicasorm/erroralumno","ORMController@erroralumno");
Route::get("/practicasorm/errorprofe","ORMController@errorprofe");
Route::get("/practicasorm/BorrarNotas","ORMController@BorrarNotas");
Route::get("/practicasorm/mostrarpapelera","ORMController@mostrarpapelera");
Route::get("/practicasorm/vaciado","ORMController@vaciado");

        //ORM Eloquent relaciones
Route::get("/practicasorm/datos_profe_curso/{id}","ORMController@datos_profe_curso");
Route::get("/practicasorm/alumnos_cursos/{id}","ORMController@alumnos_cursos");
Route::get("/practicasorm/profes_cursos/{id}","ORMController@profes_cursos");
Route::get("/practicasorm/alumnos_notas/{id}","ORMController@alumnos_notas");*/


//practica final
Route::get("/inicio",function(){
    return view("inicio");
});
Route::get("/buscar",function(){
    return view("buscar");
});
Route::post("/buscar","FormularioController@mostrar");

Route::get("/modificar","FormularioController@modificar");

Route::resource("paneldecontrol/formulario", "FormularioController");