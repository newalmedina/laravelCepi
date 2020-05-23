<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller {

    public function lengua($idioma = "español") {
        switch ($idioma) {
            case "español":
                return view("Bienvenidaespañol");
                break;
            case "frances":
                  return view("Bienvenidafrances");
                break;
            case "ingles":
                 return view("Bienvenidaingles");
                break;
            case "italiano":
                 return view("Bienvenidaitaliano");
                break;
            default: return view("desconocido"); break;
        }
    }

}
