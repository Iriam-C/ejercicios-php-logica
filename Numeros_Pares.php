<?php
$numeros = [1, 8, 5, 7, 11, 15, 12, 4, 2];



function NumPares($num) {

    $suma = 0;

    $largor = count ($num);

        for ($i = 0; $i < $largor; $i++){

          if ($num[$i] % 2 == 0){

            $suma = $suma + $num[$i];
          }



        }

        return $suma;
}

echo NumPares($numeros);


?>