<?php

$n = (int) readline("Valor recebido em dinheiro:    ");

//$resto = (int) ($ * 100) . PHP_EOL;

echo "NOTAS:" . PHP_EOL;

$nota = 100;
$quociente = (int)($resto / $moeda * 100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);

$nota = 50;
$quociente = (int)($resto / $moeda * 100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);

$nota = 20;
$quociente = (int)($resto / $moeda *100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);

$nota = 10;
$quociente = (int)($resto / $moeda *100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);

$nota = 5;
$quociente = (int)($resto / $moeda *100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);

$nota = 2;
$quociente = (int)($resto / $moeda *100);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto % ($nota * 100);





echo "NOTAS:";
echo "$notas100 nota(s) de R$100,00" . PHP_EOL;
echo "$notas50 nota(s) de R$50,00" . PHP_EOL;
echo "$notas20 nota(s) de R$20,00" . PHP_EOL;
echo "$notas10 nota(s) de R$10,00" . PHP_EOL;
echo "$notas5 nota(s) de R$5,00" . PHP_EOL;
echo "$notas2 nota(s) de R$2,00" . PHP_EOL;
echo "$notas1 nota(s) de R$1,00" . PHP_EOL;

$nota = 100;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

$nota = 50;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

$nota = 25;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

$nota = 10;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

$nota = 5;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

$nota = 1;
$quociente = (int)($resto / $moeda);
echo "$quociente moeda(s) de R$1.00" . PHP_EOL;
$resto = $resto %$moeda;

echo "MOEDAS:";
echo "$notas100 nota(s) de R$1.00" . PHP_EOL;
echo "$notas50 nota(s) de R$0.50" . PHP_EOL;
echo "$notas20 nota(s) de R$0.25" . PHP_EOL;
echo "$notas10 nota(s) de R$0.10" . PHP_EOL;
echo "$notas5 nota(s) de R$0.05" . PHP_EOL;
echo "$notas2 nota(s) de R$0.01" . PHP_EOL;
echo "$notas1 nota(s) de R$1,00" . PHP_EOL;