<?php

$maior = 0;
$menor = 0;
$grupo = 0;

$n = (int) readline("Quantidade: ");

for ($i = 0; $i < $n; $i++) {
    $dados = explode(" ", readline("Altura e Sexo: "));
    $alturas[$i] = $dados[0];
    $sexo[$i] = $dados[1];
    if ($sexos[$i] == "F") {
        $somaAltMulheres+=$alturas[$i];
        $mulheres++ ;
    }
    if ($sexos[$i] == "M") {
        $somaAltHomens+=$alturas[$i];
        $homens++ ;
    }
}
    $mediaF = $somaAltMulheres /$mulheres;
    echo " Menor altura = " . min($alturas) . PHP_EOL;
    echo " Maior altura = " . max($alturas). PHP_EOL;
    echo "Média das alturas das Mulheres = ". number_format($media, 2, ".","") . PHP_EOL;
    echo "Número de homens = " . $qtdHomens . PHP_EOL;
