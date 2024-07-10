<?php

$raio = (float)readline("Qual o valor do raio da circuferência? :  ");

$n = 3.14159;

$area = $n * pow($raio ,2);

echo "A =  " . number_format($area, 4, ".", "") . PHP_EOL;
