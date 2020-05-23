<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ["nombre","dificultad","inicion","horas","profe_id"];
    
    public function profe(){
        return $this->belongsTo("App\Profe","profe_id","profe_id");
    }
    public function alumnos(){
        return $this->hasMany("App\Alumno","curso_id","id");
    }
}
