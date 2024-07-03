<?php

$valores= explode (" " ,readline("Digite os 3 valores:   "));

$valor1 = (int)$valores[0];
$valor2 = (int)$valores[1];
$valor3 = (int)$valores[2];

$maiorAB = ($valor1 + $valor2 + abs($valor1-$valor2)) / 2 ;

$maior = ($maiorAB + $valor3 + abs($maiorAB - $valor3)) / 2;

echo "$maior eh o maior";

//php .\sequencial\bee1013.php

