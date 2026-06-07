<?php

function FizzBuzz(int $num) {

    for ($i = 1; $i <= $num; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0) {

            echo "FizzBuzz ";
            
        } else if ($i % 3 == 0) {

            echo "Fizz ";

        } else if ($i % 5 == 0) {

            echo "Buzz ";

        } else {

            echo $i . " ";

        }

    }

}

FizzBuzz(5);

?>