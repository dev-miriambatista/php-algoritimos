<?php

//A fórmula para calcular o volume é: 
//(4/3) * pi * R3. Considere (atribua) para pi 
//o valor 3.14159.

$pi = 3.14159;
                    //pow($raio,3)
$raio = (4/3.0) * $pi * (3*3*3);

echo "VOLUME =" .number_format($raio,3,".", " ");

?>


//(4/3) * pi * ($raio,3)