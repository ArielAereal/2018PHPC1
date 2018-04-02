<?php

function asoc(){
    
    echo "<br><br><br> Ejercicio 8 <br>";
    echo "Foreach asociativo <br> <br>";

    $v = array(1=>90,30=>7,'e'=>99,'hola'=>'mundo');

    /*echo "<pre>";

    var_dump($v);

    echo "</pre>";*/

    foreach ($v as $key => $value) {

        echo "<br>".$value."<br>";
        # code...
    }
}


?>