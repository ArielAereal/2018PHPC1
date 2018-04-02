<?php

function deletrear(){
    
    echo "<br><br><br> Ejercicio 5 <br>";
    echo "Letra de números <br> <br>";

    $num = rand(20,60);

    $digit = $num % 10;
    $dozen = (int) ($num / 10);

    $dec;
    $uni;

/*    echo "El número: ".$num;

    echo "El dígito: ". $digit;

    echo "La decena: ". $dozen;
    
    IT WORKS!!*/

    switch ($dozen) {        
        
        case '3':
                $dec = "treinta";
            # code...
            break;

        case '4':
                $dec = "cuarenta";
                # code...
                break;
        case '5':
                $dec = "cincuenta";
            # code...
            break;        

        case '6':
                $dec = "sesenta";
            # code...
            break;    
    }

    switch ($digit) {
        case '1':
                $uni = "uno";
            # code...
            break;
        case '2':
                $uni = "dos";
            # code...
            break;
        case '3':
                $uni = "tres";
            # code...
            break;    
        case '4':
                $uni = "cuatro";
            # code...
            break;    
        case '5':
                $uni = "cinco";   
            # code...
            break;    
        case '6':
                $uni = "seis";
            # code...
            break;    
        case '7':
                $uni = "siete";
            # code...
            break;   
        case '8':
                $uni = "ocho";
            # code...
            break;   
        case '9':
                $uni = "nueve";
            # code...
            break;      

    }

    echo "<br> Bolilla número ";

    if($dozen == 2)
    {
        if($digit == 0){
            echo "veinte";
        }else {

            echo "veinti".$uni;    
        }
    } else
    {
        if($digit == 0)
        {
            echo $dec;
        } else {

            echo $dec. " y ". $uni;

        }
    }


}

?>