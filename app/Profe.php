<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profe extends Model
{
    protected $table="profes";
    protected $fillable = ["nombre","apellidos", "alumno_id","curso_id","profe_id"];
    protected $primaryKey="profe_id";
    
    public function cursos(){
        return $this->hasMany("App\Curso","profe_id","profe_id");
    }
}
