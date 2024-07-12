<?php

$cod = explode(" ", (readline ("Qual combustível? ")));

while ($cod !=4){
    swith ($cod) {
        case 1:
            $alcool++;
            break;
            case 2:
                $alcool++;
                break;
                case 3:
                    $alcool++;
                    break;
    }
    $cod = (int) readline ("Código do combustível: ");
}
    echo "MUITO OBRIGADO". PHP_EOL;
    echo "Alcool: $alcool" . PHP_EOL;
    echo "Gasolina: $gasolina" . PHP_EOL;
    echo "Diesel: $diesel" . PHP_EOL;



