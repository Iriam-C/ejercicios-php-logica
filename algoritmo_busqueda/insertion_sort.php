<?php

$cantidad = 5;
$nums = [2, 4, 6, 8, 3];


function insertionSort($cantidad, $nums)
{
    $numero = $nums[$cantidad - 1];
    $i = $cantidad - 2;

    while ($i >= 0 && $nums[$i] > $numero) {
        $nums[$i + 1] = $nums[$i];

        echo implode(" ", $nums) ."\n";

        $i--;
 }

    $nums[$i + 1] = $numero;
    echo implode(" ", $nums) ."\n";
}


insertionSort($cantidad, $nums);