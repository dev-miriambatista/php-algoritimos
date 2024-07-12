<?php

$maior = 0;
$pos = 0;

$qtda = (int) readline("Quantidade: ");

for ($i = 0; $i < $qtda; $i++) {
    $dados = explode(" ", readline("Nomes e idades: "));
    $nomes[$i] = $dados[0];
    $idade[$i] = $dados[1];

    if($idade [$i] > $maior){
        $maior = $idade [$i];
        $pos = $i;
    }
}

echo $nome [$pos] .PHP_EOL;

//php .\repeticao\vetor_6.php