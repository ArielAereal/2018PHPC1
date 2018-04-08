<?php

include "entidades/auto.php";
include "entidades/garage.php";

$prueba = new Garage("La Gloria",100);

$segarag = new Garage("El Zorro");

$autoa = new Auto("Ford","Fucsia",181000,"2017");
$autob = new Auto("Volvo","Azul Marino",205000,"2016");

$prueba->Add($autoa);
$prueba->Add($autob);



$prueba->MostrarGarage();

$segarag->MostrarGarage();

var_dump($prueba->Equals($autoa));

var_dump($prueba->Equals(new Auto("Safari","Violeta",56000,date("Y"))));

$prueba->Add($autob);

$prueba->Remove(new Auto("Safari","Violeta",56000,date("Y")));
$prueba->Remove($autoa);

$prueba->MostrarGarage();

?>