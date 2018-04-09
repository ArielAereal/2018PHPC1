<?php


/* Notas del ejercicio:

faltan datos para calcular el perímetro de un triángulo

el método Dibujar muestra pero no retorna un string */

include "entidades/figurageometrica.php";
include "entidades/rectangulo.php";
include "entidades/triangulo.php";


 $figuna = new Rectangulo(3,7);

echo "<pre>";

 $figuna->setcolor("yellow");

 // valores de base: 2,3,5
 // valores de altura: 2,3
$figdos = new Triangulo(5,3);
$figdos->setcolor("violet");
echo "RECTÁNGULO<br>";
echo $figuna->tostring();
echo "<BR>TRIÁNGULO<BR>";
echo $figdos->tostring();
echo "</pre>";
echo $figuna->Dibujar();
echo $figdos->Dibujar();

?>