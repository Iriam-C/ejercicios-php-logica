<?php

function esPrimo(int $num) {

    $primo = true;
    
    if ($num <= 1) {

    $primo = false;

  }else{

    for ($i = 2; $i < $num; $i++){

    if($num % $i == 0){
      

        $primo = false;

   }

  }

  }

  return $primo;

}

    if (esPrimo(11)) {

        echo "Es primo";
    } else {
        
        echo "No es primo";
    }

?>