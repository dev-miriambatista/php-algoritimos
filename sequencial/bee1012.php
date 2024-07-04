<?php

$valores = explode( " ", readline("valor os valores de A, B e C:     "));

$a = (float)$valores[0];
$b = (float)$valores[1];
$c = (float)$valores[2];


$baseA = $a;
$baseB = $b;
$altura= $c;


//triangulo retangulo/ / / / /
$triangulo = ($a * $c)/2;

///circulo/ / / / / /
$pi = 3.14159;
$raio = $c;
$circulo = $pi * pow($raio,2);

//$trapezio/ / / / /  
$trapezio = (($a + $b) * $c)/2;

//$quadrado /// 
$quadrado = pow($b, 2);

//$retangulo///
$retangulo = $a * $b;


echo "TRIANGULO : " . number_format($triangulo, 3, "."," ").PHP_EOL;
echo "CIRCULO : " . number_format($circulo, 3, "."," ").PHP_EOL;
echo "TRAPEZIO : " . number_format($trapezio, 3, ".", "").PHP_EOL;
echo "QUADRADO : " . number_format($quadrado, 3, ".", "").PHP_EOL;
echo "RETANGULO : " . number_format($retangulo, 3, ".", "").PHP_EOL;