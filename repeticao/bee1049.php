<?php

$sistema_vertebral = readline("Qual o sistema vertebral?  ");
$tipo_animal = readline("Tipo de animal: ");
$tipo_alimentação = readline("Tipo de alimentação: ");

if ($sistema_vertebral == "vertebrado") {
    if ($tipo_animal == "ave") {
        if ($tipo_alimentação == "carnivoro") {
            echo "Águia" . PHP_EOL;
        } else if ($tipo_alimentação == "onivoro") {
            echo "Pomba" . PHP_EOL;
        } else if ($tipo_animal == "mamifero") {
            if ($tipo_alimentação == "onivoro") {
                echo "Homem" . PHP_EOL;
            } else if ($tipo_alimentação == "herbivoro") {
                echo "Vaca" . PHP_EOL;
            }
        }

} else if ($sistema_vertebral == "invertebrado") {
    if ($tipo_animal == "inseto") {
        if ($tipo_alimentação == "hematofago") {
            echo "Pulga" . PHP_EOL;
        } else if ($tipo_alimentação == "herbivoro") {
            echo "Lagarta" . PHP_EOL;
        }
    

} else if ($tipo_animal == "anelideo") {
    if ($tipo_alimentação == "hematofago") {
        echo "Sanguessuga" . PHP_EOL;
    } else if ($tipo_alimentação == "onivoro") {
        echo "Minhoca" . PHP_EOL;
    }
}
}
}


//php .\repeticao\bee1049.php

