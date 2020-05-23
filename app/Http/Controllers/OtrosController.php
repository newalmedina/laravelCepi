<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosController extends Controller {

    public function fotos() {
        $arrayfotos = array('/aula1.jpg', '/aula2.jpg', '/aula3.jpg', '/aula4.jpg', '/aula5.jpg', '/aula6.jpg');
        //Puede introducir la barra dentro del array o bien en la vista hacerlo
        $arraytitulo = array('Novedades Laravel', 'Desarrollo de aplicaciones CRUD', 'Curso de Laravel', 'ProgramaciÃ³n orientada a objetos', 'Curso de Patrones de DiseÃ±o con PHP', 'DiseÃ±o y optimizaciÃ³n con Laravel');
        $arraycuerpo = [
            'Aprende las novedades y nuevos componentes de la versiÃ³n mÃ¡s actual de Laravel.',
            'Aprenda a crear en Laravel y desarrollar clÃ¡sicos formularios para realizar las operaciones mÃ¡s caracterÃ­sticas con bases de datos.',
            'Aprenda los fundamentos de programaciÃ³n del mÃ¡s popular framework de PHP, no requiere tener elevados conocimientos en programaciÃ³n.',
            'Aprende las bases y conceptos de la programaciÃ³n orientada a objetos con PHP desde cero.',
            'En este curso aprenderÃ¡s sobre patrones de diseÃ±o y cÃ³mo aplicarlos en el lenguaje PHP.',
            'Aprende a desarrollar los elementos necesarios para crear diseÃ±os elaborados y optimizados para sus proyectos de Laravel.'
        ];
        $arraypie = [
            'Ãšltima modificaciÃ³n realizada ayer.',
            'Ãšltima modificaciÃ³n realizada hace 1 dÃ­a.',
            'Ãšltima modificaciÃ³n realizada hace 2 dÃ­as.',
            'Ãšltima modificaciÃ³n realizada hace 2 dÃ­as.',
            'Ãšltima modificaciÃ³n realizada hace 3 dÃ­as.',
            'Ãšltima modificaciÃ³n realizada hace 3 dÃ­as.)'
        ];
        
        return view("galeria")
                ->with("fotos", $arrayfotos)
                ->with("titulo", $arraytitulo)
                ->with("cuerpo", $arraycuerpo)
                ->with("pie", $arraypie);
    }

}
