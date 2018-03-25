<?php

function potencia (){

    for ($i=1; $i < 5; $i++) { 
        
        for ($j=1; $j <5 ; $j++) { 
            
            // numero, exponente
            echo pow($i,$j)."<br>";
        }
        echo "<br>";
    }

}

echo "<br> Ejercicio 11<br>";
echo "<br> Potencia de 4 números<br><br>";

potencia();

?>
