<?php

function GenerarFibonacci (int $n){

    $a = 0; 
    $b = 1;

    for ($i = 1; $i <= $n; $i++){

    echo($a ."\n");

    $siguiente = $a + $b;

    $a = $b;
    $b = $siguiente;

    

    } 



}

GenerarFibonacci(8);


?>