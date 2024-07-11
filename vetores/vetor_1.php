<?php
$vetor =[];
$maior = 0;


$qtd = (int) readline("Quantidade de númeos: ");
$valores =explode (" ", readline("Digite os $qtd números: "));

//popular o vetor
for ($i=0; $i < $qtd; $i++) {
    $valor = (float) readline( readline(($i + 1) ."º valor: "));
    array_push($vetor,$valor);
    if ($vetor[$i] > $maior){
        $maior = $vetor[$i];
        $pos = $i;
    }
}
    echo "Maior valor: $maior" . PHP_EOL . "Posição: $pos";