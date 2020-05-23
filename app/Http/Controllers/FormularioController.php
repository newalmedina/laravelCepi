<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class FormularioController extends Controller
{

    public function index()
    {
        return view("inicio");
    }

    
    public function create()
    {
        return view("altasalumnos");
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "nombre"=>"required",
            "apellidos"=>"required",
            "dni"=>"required",
            "telefono"=>"required",
            "curso_id"=>"required"            
            ]);
            Alumno::create($request->all());
            return redirect()->route("formulario.index")->with("success","Estudiante Guardado correctamente");
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $alumno=Alumno::find($id);
        return view("editar",compact("alumno"));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "nombre"=>"required",
            "apellidos"=>"required",
            "dni"=>"required",
            "telefono"=>"required",
            "curso_id"=>"required"            
            ]);
        $registro = Alumno::find($id);
            Alumno::find($id)->update($request->all());
            return redirect()->route("formulario.index")->with("success","Estudiante".$registro->id." Actualizado correctamente");
          
    }

    public function destroy($id)
    {
        $registro = Alumno::find($id);
            Alumno::find($id)->delete();
            return redirect()->route("formulario.index")->with("success","Estudiante".$registro->id." Eliminado correctamente");
    }
    public function mostrar(Request $request){       
        $this->validate($request, ['nombre'=>'required','apellidos'=>'required']);
        
        $nom=$request->input('nombre');
        $ape=$request->input('apellidos');
        
        $datos=Alumno::where('nombre', $nom)
                ->where("apellidos", $ape)
                ->get();
        
        return view('mostrar', compact('datos'));
    }
    public function modificar(){
        $alumnos = Alumno::orderBy("apellidos")->paginate(5);
        return view("modificar", compact("alumnos"));
    }
}
