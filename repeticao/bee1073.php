<?php

$n = (int) readline("Valor de n: ");

for ( $i= 1; $i <= $n; $i++){
    if($i %2 == 0) {
        echo "$n^2 = " .pow($i,2) . PHP_EOL;
    }
}

    //php .\repeticao\bee1073.php