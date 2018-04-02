<?php 

require_once "alumno.php";

// ver todos los metodos de ordenamiento
// ver php.net

echo "<br> <br> ORDENAMIENTO DE ARRAYS<br><br>";



$arraytest = array (10,8,30);

$arraytest[] = 1000;

$arraytest["apellido"] = "Lopez";

$arraytest["alumno"] = new Alumno();

$arraytest[] = new Alumno();

$arraytest[] = "A";

$arraytest[33]= "Z";

$arraytest[10] = "B";

echo "El array original: <br>";

echo "<pre>";

// metodos de ordenamientos

var_dump($arraytest);

echo "</pre>";


echo "El array con SORT: <br>";

echo "<pre>";

// metodos de ordenamientos
sort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "Tira error de conversión de un objeto a entero, se le complica para ordenarlo y lo pone entre las letras y los numeros (letras, objetos, numeros). EL ARRAY ESTÁ INDEXADO AHORA<br><br>";


echo "El array con RSORT: <br>";
echo "<pre>";

// metodos de ordenamientos
rsort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "Tira el mismo error que SORT, y los ordena al revés (numeros, objetos, letras). TAMBIÉN ESTÁ INDEXADO <br><br>";


echo "El array con ASORT: <br>";
echo "<pre>";

// metodos de ordenamientos
asort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "LOS VALORES del array se ordenan igual que con SORT, pero el indexado está al revés (de 9 a 0)<br><br>";

echo "El array con KSORT: <br>";

echo "<pre>";

// metodos de ordenamientos
ksort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "Ordena igual que RSORT pero sin tirar error de objetos.<br><br>";


echo "El array con ARSORT: <br>";
echo "<pre>";

// metodos de ordenamientos
arsort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "IGUALITO a RSORT<br><br>";

echo "El array con KRSORT: <br>";

echo "<pre>";

// metodos de ordenamientos
krsort($arraytest);
var_dump($arraytest);

echo "</pre>";

echo "IGUALITO a ASORT<br><br>";


echo "Los últimos cuatro supuestamente son de arrays asociativos.";

 ?>