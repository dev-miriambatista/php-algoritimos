<?php

$n1 =(float) readline ("resultado da prova 1: ");
while ($nota1 < 0 || $nota1 >  10){
    echo"nota invalida". PHP_EOL;
    $n1 =(float) readline ("resultado da prova 1: ");
    
}
$n2 =(float) readline ("resultado da prova 2: ");
    while ($nota2 < 0 || $nota2 >  10){
        echo"nota invalida". PHP_EOL;
        $n2 =(float) readline ("resultado da prova 2: ");
        }

        $media = ($n1 + $n2) / 2;

    echo "Média = ". number_format($media,2, ".", " "). PHP_EOL;
        


