<?php

function impares(){
    
    echo "<br><br><br> Ejercicio 7 <br>";
    echo "Impares <br> <br>";

    $regla;
    $number = 0;
    $count = 0;
    $a = 0;
    
    do {      
        if ($number % 2 == 1)
        {
            $regla[$count] = $number;
            
            $count++;
        }
        $number++;
    } while ($count <= 9);


    for ($i=0; $i <10 ; $i++) { 

        echo "FOR ".$regla[$i]."<br>";
        # code...
    }

    while ($a <= 9) {
        echo "WHILE ".$regla[$a]."<br>";
        $a++;
        # code...
    }

    foreach ($regla as $key => $value) {

        echo "FOREACH ".$value."<br>";
        # code...
    }
}
?>