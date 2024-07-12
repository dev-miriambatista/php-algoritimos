<?php

$n = (int) readline("Valor de n: ");
$valores = explode (" ", readline("Valor dos vetores: "));

for ($i = 0; $i < $n; $i++) {
   $soma+=$valores[$i];
}

$media = $soma /$n;
echo "Media: $media" . PHP_EOL;

echo "Valores abaixo da média: ". PHP_EOL;
for( $i = 0; $i < $n; $i++ ) {
    if ($valores[$i] < $media){
        echo $valores[$i] . PHP_EOL;
    }
}





//php .\repeticao\vetor_3.php

