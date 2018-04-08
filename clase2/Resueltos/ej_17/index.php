<?php

include "entidades/auto.php";

echo "<br> Autos varios <br><br>";

$prueba = new Auto("Honda","Gris",23000);

$prueba->AgregarImpuestos(5000);

var_dump($prueba);

// misma marca, mismo color, distinto precio

$autouno = new Auto ("Chevrolet","Blanco",45000);

$autodos = new Auto ("Chevrolet","Blanco",65000);

// ultima sobrecarga

$autotres = new Auto ("Renault","Verde",105000,date("d-m-Y"));

//Auto::MostrarAuto($autotres);


$bolido = new Auto("Fiat","Dorado");

$agas = new Auto ("Fiat","Azul");

Auto::MostrarAuto($prueba);

echo "<br> Equals <br><br>";

var_dump($prueba->Equals($agas));

echo "<br><br>".$bolido->Equals($agas);

echo "<br><br> Add <br><br>";

echo Auto::Add($prueba,$agas)." <br><br>";

echo Auto::Add($bolido,$agas)." <br><br>";

// Agregar Impuesto

echo "<br><br> Agregar Impuesto: <br><br>";

$autouno->AgregarImpuestos(1500);
$autodos->AgregarImpuestos(1500);
$autotres->AgregarImpuestos(1500);

echo "<br><br>Add<br><br>";

$obtenerImporte = Auto::Add($autouno,$autodos);

echo $obtenerImporte;

echo "<br><br>".$bolido->Equals($agas)."<br><br>";

var_dump($bolido->Equals($autotres));

echo "<br><br>Mostrar Autos<br><br>";

echo "Auto Uno: <br>";
Auto::MostrarAuto($bolido);

echo "<br><br>Auto Dos: <br>";
Auto::MostrarAuto($autouno);

echo "<br><br>Auto Tres: <br>";
Auto::MostrarAuto($autotres);

?>