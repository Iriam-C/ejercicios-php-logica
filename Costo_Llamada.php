<?php

function CostoLlamada(int $clave, int $minutos){

    $precio = 0;


    switch ($clave){


        case 12: 
            $precio = 2.00;
            break;

        case 15: 
            $precio = 2.20;
            break;

        case 18: 
            $precio = 4.50;
            break;
        
        case 19: 
            $precio = 3.50;
            break;

        case 23: 
            $precio = 6.00;
            break;

        case 25: 
            $precio = 6.00;
            break;
        
        case 29: 
            $precio = 5.00;
            break;

        default:
            return "La clave no existe";
        
    
    }

    $total = $minutos * $precio;

    if ($minutos < 30){

            $total = $total - ($total * 0.10);


    }

    return $total;

}


echo CostoLlamada(18, 20);
?>