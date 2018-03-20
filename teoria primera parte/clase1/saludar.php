<?php 


for ($i=0; $i < 10; $i++) {
// jugar con esto.  Entendi por que 1001
	include "repetidor.php";
	$cont++;	# code...
}

var_dump($cont);

require_once "alumno.php";
/*
$nombre = "Azul";
$sueldo = 1500;
echo "Hola Mundo PHP $nombre <br>";
# commentos




printf("sueldo: %f <br>", $sueldo);
printf("nombre: $nombre <br>");

#arrays a fondo

$miarray = array(1,2,3);

echo "<pre>";
var_dump($miarray);

echo "</pre>";

$segundoarray[33] = "Hola";

$segundoarray["nombre"]= "María";

$segundoarray[34] = "2018";

var_dump($segundoarray);

$miarasoc = array("legajo"=>19);

var_dump($miarasoc);*/





$elalumno = new Alumno();

$elalumno->nombre = "Juan";

$elalumno->legajo = 666;

$elalumno->mail = "NO TENGO";

$otro = $elalumno;

$otro->nombre = "Juan";

// es la misma direccion de memoria

var_dump($elalumno);

 ?>