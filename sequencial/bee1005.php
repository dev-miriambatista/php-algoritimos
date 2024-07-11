<?php

$nota1 = (double)readline("Digite a nota 1: ");//3.5

$nota2 = (double)readline("Digite a nota 2: ");//7.5

$media = (($nota1 *3.5) + ($nota2 * 7.5))/11;

 echo "MEDIA = " .number_format($media,5,".", "") . PHP_EOL;