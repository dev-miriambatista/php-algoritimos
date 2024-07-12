<?php

$n = (int) readline ("Quantidade: ");

for ($i = 0; $i < $n; $i ++) {
    $dados = explode(" ", readline (" Nome e 2 notas: "));
    $nomes [$i]= $dados [0];
    $medias [$i] = ((float) $dados [1] + (float) $dados [2] / 2);
}

echo"Alunos aprovados" . PHP_EOL;

for ($i = 0; $i < $n; $i ++) {
    if ($medias[i] > 6.0){
        echo $nomes[$i] . PHP_EOL;
    }
}

//php .\repeticao\vetor_7.php