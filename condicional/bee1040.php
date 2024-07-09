<?php

$notas = explode(" ", readline("NOTAS: "));//2.0 4.0 7.5 8.0;

$n1 = (float) $notas[0];
$n2 = (float) $notas[1];
$n3 = (float) $notas[2];
$n4 = (float) $notas[3];

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 4) + ($n4 * 1)) / 10; //5.4

echo "Média = " . number_format($media, 1, ".", " ") . PHP_EOL;

if ($media >= 7.0) {
    echo "ALUNO APROVADO!!" . PHP_EOL;
} else if ($media < 5.0) {
    echo " ALUNO REPROVADO." . PHP_EOL;
} else if ($media >= 5.0 && $media <= 6.9) {
    echo "ALUNO EM EXAME" . PHP_EOL;
    $nota_exame = (float) readline("Nota: "); //6.4
    echo " Nota do exame :" . number_format($nota_exame, 1, ".", " ") . PHP_EOL;
    $media_final = ($nota_exame + $media) / 2;
    if ($media_final > 5.0) {
        echo " ALUNO APROVADO" . PHP_EOL;
    } else {
        echo "ALUNO REPROVADO" . PHP_EOL;
    }
}