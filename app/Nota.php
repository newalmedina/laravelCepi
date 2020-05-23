<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    protected $fillable = ["profe_id","curso_id","alumno_id","nota"];
    
    use SoftDeletes;
    protected $dates=["deleted_at"];
}
