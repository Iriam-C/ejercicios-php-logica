<?php

$nums = [-1, 0, 3, 5, 9, 12];
$target = 9;

function search ($nums, $target) {

    $izq = 0;
    $der = count($nums) - 1;

    while ($izq <= $der) {
        $medio = (int)(($izq + $der) / 2);
        
            if ($nums[$medio] == $target) {
                return $medio;
            }
            
            if ($nums[$medio] < $target) {
                $izq = $medio + 1;
            } else {
                $der = $medio - 1;
            }
     }
    
    return -1;
}



echo search($nums, $target);