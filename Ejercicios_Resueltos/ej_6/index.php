<?php

function cargal(){
    
    echo "<br><br><br> Ejercicio 6 <br>";
    echo "Promedio aleatorio <br> <br>";

    $mano = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
    $acum = 0;
    $cant;
    $prom;

    foreach ($mano as $key => $value) {

        //echo "<br>".$value."<br>";

        $acum += $value;
        # code...

        $cant = $key + 1;
    }

    echo "<br>Promedio ";
    
    $prom = $acum/$cant;  

    if($prom == 6){
        echo "igual a 6";
    } else if($prom < 6)
    {
        echo "menor a 6";
    } else{
        echo "mayor a 6";
    }
}
?>