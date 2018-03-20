<?php 

require_once "alumno.php";

// ver todos los metodos de ordenamiento
// ver php.net

$arraytest = array (10,8,30);

$arraytest[] = 1000;

$arraytest["apellido"] = "Lopez";

$arraytest["alumno"] = new Alumno();

$arraytest[] = new Alumno();

$arraytest[] = "A";

$arraytest[33]= "Z";

$arraytest[10] = "B";

echo "<pre>";

// metodos de ordenamientos

var_dump($arraytest);

echo "</pre>";

echo "<pre>";

// metodos de ordenamientos
sort($arraytest);
var_dump($arraytest);

echo "</pre>";


echo "<pre>";

// metodos de ordenamientos
rsort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "<pre>";

// metodos de ordenamientos
asort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "<pre>";

// metodos de ordenamientos
ksort($arraytest);
var_dump($arraytest);

echo "</pre>";

 ?>