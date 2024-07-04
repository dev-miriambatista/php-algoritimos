<?php

$raio = (float)readline("Qual o valor do raio da circuferência? :  ");

$n = 3.14159;

$raio_quadrado = $n . pow($raio , 2);

$area = $raio_quadrado * $n;

echo "Area =  " . number_format($area, 4, ".", "");

