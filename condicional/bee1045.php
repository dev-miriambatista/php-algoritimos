<?php

$valores = explode(" ", readline(" digite o valor: "));

rsort($valores);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];


// if( $valores [0] > $valores[1] && $valores[0] > $valores [2]){
//     $maior = $valores[0];
//     $meio = $valores[1];
//     $menor = $valores[2];

// } else if ($valores[1] > $valores[0] && $valores[1] > $valores[2]){
//     $maior = $valores[1];
//     $meio = $valores[0];
//     $menor = $valores[2];
// }else{
//     $maior = $valores[2];
//     $meio = $valores[0];
//     $menor = $valores[1];
//}

//$a =$maior; $b = $meio; $c = $menor;

if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO" . PHP_EOL;
} else {
    if (pow($a, 2) == pow($b, 2) + pow($c, 2)) {
        echo " TRIANGULO RETANGULO" . PHP_EOL;
    } else if (pow($a, 2) > pow($b, 2) + pow($c, 2)) {
        echo " TRIANGULO OBTUSANGULO" . PHP_EOL;
    } else if (pow($a, 2) < (pow($b, 2) + pow($c, 2))) {

    }

    echo "TRIANGULO ACUTANGULO" . PHP_EOL;

}
if ($a == $b && $b == $c) {
    echo " TRIANGULO EQUILATERO" . PHP_EOL;
} else if ($a == $b && $a != $c || $a == $c && $a != $b || $b == $c && $b != $a) {
    echo "TRIANGULO ISOSCELES" . PHP_EOL;
}