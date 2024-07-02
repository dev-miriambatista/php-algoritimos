<?php

$n1 = readline("Digite a nota do primeiro trimestre:   ");

$n2 = readline ("Digite a nota do terceiro trimestre:  ");

$n3 = readline ("Digite a nota do terceiro trimestre:  ");

$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5))/10;

echo "Média = " .number_format($media, 6.3,".", " ");



