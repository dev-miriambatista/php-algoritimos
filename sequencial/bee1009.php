
<?php

// Leitura dos dados de entrada
$nome = trim(fgets(STDIN));
$salario = (double) trim(fgets(STDIN));
$total_vendas = (double) trim(fgets(STDIN));

// Processamento
$total = $salario + ($total_vendas * 0.15);

// Saída formatada com duas casas decimais
echo "TOTAL = R$ " . number_format($total, 2, ".", "") . PHP_EOL;
?>










exit;
//entrada
$nome = (string)readline("Digite seu nome: ");

$salario = (double)readline ("Insira seu salário fixo: ");

$total_vendas = (double)readline("Qual seu total de vendas?: ");

//processamento

$total = $salario + ($total_vendas * 0.15);

$total = floor($total * 100) / 100;

//saída
echo "TOTAL = R$ ".number_format($total ,2 ,"." ," ") . PHP_EOL;
