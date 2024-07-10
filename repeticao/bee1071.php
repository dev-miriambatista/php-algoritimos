<?php

$x = (int) readline ("valor 1: ");
$y = (int) readline ("valor 2: ");

$maior = 0;
$maior = 0;  

if( $x > $y){
    $maior = $x;
    $menor = $y;
} else{
    $menor = $y;
    $maior = $x;
}

$soma = 0;

for ($i = $menor+1; $i <= $maior; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;    
    }
}
echo $soma . PHP_EOL;
//php .\repeticao\bee1071.php