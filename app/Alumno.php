<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ["nombre","apellidos","dni","telefono", "curso_id"];
    public function notas(){
        return $this->hasMany("App\Nota","alumno_id","id");
    }
}
