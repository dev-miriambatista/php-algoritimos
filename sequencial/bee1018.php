<?php

$valor = (int) readline("Valor recebido em dinheiro:    ");

echo $valor . PHP_EOL;

$notas100 = (int) ($valor / 100);
$resto = $valor % 100; //sobra 76

$notas50 = (int) ($resto / 50);
$resto = $resto % 50;//26

$notas20 = (int) ($resto / 20);
$resto = $resto % 20;

$notas10 = (int) ($resto / 10);
$resto = $resto % 10;

$notas5 = (int) ($resto / 5);
$resto = $resto % 5;

$notas2 = (int) ($resto / 2);
$resto = $resto % 2;

$notas1 = (int) ($resto / 1);
$resto = $resto % 1;

echo "$notas100 nota(s) de R$100,00" . PHP_EOL;
echo "$notas50 nota(s) de R$50,00" . PHP_EOL;
echo "$notas20 nota(s) de R$20,00" . PHP_EOL;
echo "$notas10 nota(s) de R$10,00" . PHP_EOL;
echo "$notas5 nota(s) de R$5,00" . PHP_EOL;
echo "$notas2 nota(s) de R$2,00" . PHP_EOL;
echo "$notas1 nota(s) de R$1,00" . PHP_EOL;


//php .\sequencial\bee1018.php