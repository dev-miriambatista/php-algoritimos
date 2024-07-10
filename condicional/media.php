<?php

$nota1 = (float) readline("Ingorme a nota do primeiro bimestre: ");
$nota2 = (float) readline("Ingorme a nota do segundo bimestre: ");

$media = ($nota1 + $nota2) / 2;

echo "Média do aluno: $media\n";

if ($media >= 7.0) {
    echo "Aluno aprovado!!!\n";
} else if ($media > 3 && $media < 7) {
    echo "Aluno em recuperação ...\n";
} else if ($média <= 3) {
    echo "Aluno REPROVADO.\n";
}