<?php

namespace App\Http\Controllers;

class DatosController extends Controller {

    public function inicio($id = null) {
        if ($id)
            return "Montrando detalles del cliente: {$id}, a las " . date("H:i:s");
        else
            return "Error no existen datos";
    }

    public function listado($id = null) {
        $codigo = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $descripcion = ["Acer Aspire 3 A315-51-30T3", "Acer Extensa 15 2540-312E", "Acer TravelMate P449-G2-M-51T0", "Apple MacBook - 12", "Apple MacBook - 13", "Apple MacBook Pro with Touch Bar - 15", "ASUS ROG G752VY-GC249T", "ASUS R510VX-DM528T", "ASUS P541UA GQ1507T", "ASUS A541UV GQ500T"];
        $unidades = [25, 20, 25, 15, 14, 22, 17, 21, 15, 10];
        $precio = ["421,26 â‚¬", "379,57 â‚¬", "967,55 â‚¬", "1.391,85 â‚¬", "1.210,67 â‚¬", "2.929,62 â‚¬", "1.917,15 â‚¬", "892,55 â‚¬", "542,86 â‚¬", "724,99 â‚¬"];
   
        if ($id) {
             $cadena="";
            $cadena="<table width='600' border='0'><colgroup><col span='4' style='background-color:#57D85E'></colgroup><thead>";
            $cadena.="<tr><th>CÃ³digo</th><th>DescripciÃ³n</th><th>Unidades</th><th bgcolor='#57D85E'>Precio</th></tr></thead><tbody><tr>";
            $cadena.="<td bgcolor='E1D249'>".$codigo[$id]."</td><td bgcolor='#E1D249'>".$descripcion[$id]."</td>";
            $cadena.="<td bgcolor='#E1D249'>".$unidades[$id]."&nbsp;</td><td bgcolor='#E1D249'>".$precio[$id]."</td>";
            $cadena.="</tr></tbody></table>";
             return $cadena;
        }else{
            $cadena="";
            $cadena="<table width='600' border='0'><colgroup><col span='4' style='background-color:#57D85E'></colgroup><thead>";
            $cadena.="<tr><th>CÃ³digo</th><th>DescripciÃ³n</th><th>Unidades</th><th bgcolor='#57D85E'>Precio</th></tr></thead><tbody><tr>";
             for ($i=0; $i<10; $i++){
                 $cadena.="<td bgcolor='E1D249'>".$codigo[$i]."</td><td bgcolor='#E1D249'>".$descripcion[$i]."</td>";
                 $cadena.="<td bgcolor='#E1D249'>".$unidades[$i]."&nbsp;</td><td bgcolor='#E1D249'>".$precio[$i]."</td>";
                 $cadena.="</tr>";
             }
             $cadena.="</tbody></table>";
             return $cadena;
        }
        
        
    }

}
