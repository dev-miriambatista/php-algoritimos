<?php

$number = (int) readline ("Numero do funcionário:    ");
$ht = (double)readline(" Qual o valor do salário:   ");
$valorht = (double) readline("Qual o valor da hora trabalhada?:   ");

$salario = $valorht * $ht;

echo "NUMBER = $number\n"; 
echo "SALARY = " . number_format($salario, 2, ".", " ");

//php .\sequencial\bee1008.php
