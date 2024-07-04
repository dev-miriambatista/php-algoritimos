<?php

$idade_dias = (int)readline(" quantos dias?:   ");

$ano = (int)($idade_dias / 365);
$resto = $idade_dias % 365;

$mes = (int) ($resto / 30);
$idade_dias = $resto  % 30;

$dia =$resto % 30;

echo "$ano ano (s)".PHP_EOL;
echo "$mes mes (es)".PHP_EOL;
echo "$dia dia (s)".PHP_EOL;
