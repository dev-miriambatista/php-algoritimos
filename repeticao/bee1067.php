<?php

$valor = (int) readline("Digite um valor: ");

for ($i=1; $i <= $valor; $i++) {
    if ($i %2!= 0) {
        echo $i .PHP_EOL;
    }
}