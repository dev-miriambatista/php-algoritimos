<?php

$valores = explode(" ", readline("Digite 2 números: "));

$n1 = (int) $valores[0];
$n2 = (int) $valores[1];

if (($n1 % $n2 == 0) || ($n2 % $n1 == 0)) {
    echo "São Multiplos\n";
} else {
    echo "Não são multiplos\n";
}