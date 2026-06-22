<?php

$heights = [1,1,4,2,1,3];
$expected = $heights;

for ($i = 0; $i < count($expected); $i++) {

    for ($j = 0; $j < count($expected) - 1; $j++) {

     if ($expected[$j] > $expected[$j + 1]) {

        $aux = $expected[$j + 1];
        $expected[$j + 1] = $expected[$j];    
        $expected[$j] = $aux;    
    
        }
    }
}

$contador = 0;

for ($i = 0; $i < count($heights); $i++) {

    if ($heights[$i] != $expected[$i]) {

        $contador++;
    }
}

echo $contador;

?>