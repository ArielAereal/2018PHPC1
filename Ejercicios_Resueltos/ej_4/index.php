<?php

function calculator(){
    
    echo "<br><br><br> Ejercicio 4 <br>";
    echo "Calculadora <br> <br>";

    $selector = rand(1,4);
    $op1 = rand(1,15);
    $op2 = rand(0,3);
    $tado;

    switch ($selector) {
        case '1':
        $operador = '+';

        $tado = $op1 + $op2;
            # code...
            break;

            case '2':
            $operador = '-';
            $tado = $op1 - $op2;
            break;

            case '3':
            $operador = '*';
            $tado = $op1 * $op2;
                # code...
                break;
        
                case '4':
                $operador = '/';
                if($op2 == 0){
                    $tado = "No se puede dividir por cero";
                } else {

                    $tado = $op1 / $op2;
                }
                    # code...
                    break;
      
    } 
      

    echo $op1." ".$operador." ".$op2." = ".$tado;


}



?>