<?php

$valores = explode (" ",readline ("Valor x e y: "));

$x = (int) $valores[0];
$y = (int) $valores[1];

while ($x != $y){
    if ($x > $y){
        echo"Descrecente\n";
    }else{
        echo "Crescente\n";
    }

    $valores = explode (" ", readline (" Valor de x e y: "));

    $x = (int) $valores[0]; 
    $y = (int) $valores[1];

}



