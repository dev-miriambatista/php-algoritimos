<?php

$n = (int) readline ("Quantidade de números: ");
$vatorA = (int) readline ("Valor A: ");
$vatorB = (int) readline ("Valor B: "); 

echo "Soma: \n";
for ($i=0; $i < $n; $i++) {
    $vetorSoma [$i] = $vetorA[$i] + $vetorB[$i];
    echo $vetorSoma[$i] . " ";
}



