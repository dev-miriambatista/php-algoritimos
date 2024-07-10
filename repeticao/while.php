<?php

$senha = (int) readline("senha: ");

while($senha != 2002) {
    echo"Senha Invalida\n";
    $senha = (int) readline("Senha: ");
}

echo " Acesso Permitido\n";