<?php

$tempo_segundos = (int) readline("Tempo em segundos:   ");

$horas = (int) ($tempo_segundos / 3600);

$resto = $tempo_segundos % 3600;

$min = (int) ($resto / 60);

$seg = $resto % 60;

echo "$horas : $min :$seg";