<?php

$valor = (float) readline("Salario: ");


if($valor <= 2000){
  $imposto = 0.0;
}else if ($valor <= 3000.0){
$imposto = ($valor - 2000.00) * 0.08;
    }else if($valor <= 4500.0){
        $imposto = ($valor - 3000.0) * 0.18 + 1000.0 * 0.08;
        ($valor >= 3000 && $salario <= 4500){
    } else { 
        $imposto = ($valor - 4500.0) * 0.28 + 1500.0 *0.18 +1000.0 *0.08;
    }
    if($imposto == 0.0){
        echo "Isento". PHP_EOL;
    }else{
        echo " R$" . number_format($imposto,2 ,".","") . PHP_EOL;
    }
}
 
    



echo "IMPOSTO= " .number_format($taxa, 2, "."," ");

//php .\condicional\bee1051.php