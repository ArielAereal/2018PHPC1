<?php

include "entidades/punto.php";
include "entidades/rectangulo.php";

// siempre la base es horizontal, v3x - v1x > v3y - v1y
 
$prueba = new rectangulo(new punto(1,2),new punto(10,5));

echo "<br><br> Un rectángulo a partir de 4 vértices<br><br>";
echo $prueba->draw();


?>