<?php

$coordenadas = explode (" ", readline("Digite os valores das coordenadas: "));

$x = (int) $coordenadas[0];
$y = (int) $coordenadas[1];

while ($x != 0 && $y != 0){
    if ($x > 0 && $y > 0){
        echo "primeiro". PHP_EOL;
    }else if ($x < 0 && $y > 0){
        echo "segundo". PHP_EOL;
    }else if ($x < 0 && $y < 0){
        echo "terceiro". PHP_EOL;
    }else if ($x > 0 && $y < 0){
        echo "quarto". PHP_EOL;
    }
    $coordenadas = explode (" " , readline("Digite os valores das coordenadas: "));

    $x = (int) $coordenadas[0];
    $y = (int) $coordenadas[1];
}