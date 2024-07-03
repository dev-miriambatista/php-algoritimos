<?php
//entrada
$nome = (string)readline("Digite seu nome:    ");

$salario = (double)readline ("Insira seu salário fixo:    ");

$total_vendas = (double)readline("Qual seu total de vendas?:    ");

//processamento

$total = $salario + ($total_vendas * 0.15);

//saída
echo "TOTAL = R$" .number_format($total,2,".", " ");
