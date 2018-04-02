<?php

function delmedio()
{
    echo "<br> Ejercicio 3 <br>";
    echo "El valor del medio: ";

    $un = rand(1,5);
    $do = rand ( 1,5);
    $tre = rand (1,5);

    $camioneta = array($un,$do,$tre);

    if($un != $do && $un != $tre && $do != $tre)
    {
        sort($camioneta);
        echo $camioneta[1];

    } else if($un == $do && $un == $tre) {
        echo "Valor único: ". $camioneta[1];
    } else{
        echo "No hay valor del medio";
    }
    
    
}







?>