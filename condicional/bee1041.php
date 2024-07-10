<?php

$x = explode(" ",readline( "Digite um valor: "));
$y = explode(" ",readline( "Digite um valor: "));

$x=(double)[0];
$y=(double)[1];

if ($x > 0 && $y > 0){
    echo "Q1". PHP_EOL;
}else if
    ($x < 0 && $y > 0){
      echo "Q2". PHP_EOL;
}else if
    ($x < 0 && $y < 0){
      echo "Q3". PHP_EOL;
}else if
    ($x > 0 && $y < 0){
    echo "Q4". PHP_EOL;
    }else if ($x > || $x < 0 && $y == 0){
echo "Eixo x". PHP_EOL;
}else{
    echo " Está na origem";
}