<?php
//Leia os quatro valores correspondentes aos eixos x e y de dois 
//pontos quaisquer no plano, p1(x1,y1) e p2(x2,y2) e calcule a 
//distância entre eles, mostrando 4 casas decimais após a vírgula, 
//segundo a fórmula:

//Distancia : raiz quadrada(sqrt) de 
             //(x2 - x1)² + 
             //(y2 - y1)²

    //    1º eixo / 2º eixo
             //(x1  x2) 
             //(y1  y2)

             

$p1 = explode(" " , readline ("Valores do primeiro eixo:   "));

$x1 = (float) $p1[0];
$y1 = (float) $p1[1];


$p2 = explode (" ", readline ("Valores do segundo eixo:  "));

$x2 = (float) $p2[0];
$y2 = (float) $p2[1];

$distancia = sqrt(pow($x2 - $x1, 2) + pow ($y2 -$y1,2));

echo "Distancia:" . number_format($distancia, 4, ".", "");