<?php

$valores = explode (" ", readline("Digite 4 valores: "));

$valorA = [0];
$valorB = [1];
$valorC = [2];
$valorD = [3];

if (($valorB > $valorC) && ($valorD > $valorA) && (($valorC + $valorD) > ( $valorA + $valorB)) && ($valorC && $valorD > 0) && ($valorA / 2)){
 echo "Valores Aceitos";
}else{
    echo " Valores Não Aceitos";
}