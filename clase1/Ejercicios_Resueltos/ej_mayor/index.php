<?php


function mayordetres($uno,$dos,$tres)
{
    echo "<br><br> Ejercicio 'el mayor de la clase uno' <br><br>";
    $a = $uno;
    
    $b = $dos;
    
    $c = $tres;
    
    $result;   
        
    if($a == $b && $a == $c )
    {
        $result = $a;
    }
    
    if($a > $b && $a > $c)
    {
        $result = $a;
    }
    
    if($b > $a && $b > $c)
    {
        $result = $b;
    }
    
    if($c > $a && $c > $b)
    {
        $result = $c;
    }

    // agrego el código que falta
    
    if($a == $b && $a > $c)
    {
        $result = $b;
    }

    if ($a == $b && $a < $c)
    {
        $result = $c;
    }

    if($a == $c && $a > $b)
    {
        $result = $c;
    }

    if ($a == $c && $a < $b)
    {
        $result = $b;
    }

    if($c == $b && $a > $c)
    {
        $result = $a;
    }

    if ($c == $b && $a < $c)
    {
        $result = $c;
    }

    echo "El mayor es: ".$result;
    
    echo "<br> <br> La prueba está incompleta, no contempla cuando dos son iguales y uno distinto<br><br>";

}




?>