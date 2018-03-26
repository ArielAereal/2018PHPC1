<?php

require_once "clases.php";


 $figuna = new Rectangulo();

var_dump($figuna);


$figuna->setcolor("Amarillo");

echo $figuna->getcolor();

echo $figuna->tostring();

$figdos = new Triangulo();

var_dump($figdos);

?>