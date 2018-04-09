<?php

include "entidades/operario.php";
include "entidades/fabrica.php";

$opuno = new Operario(10555,"Juarez","Pepe");
$opdos = new Operario(53222,"Olivera","Facundo");
$optres = new Operario(12232,"Echegaray","Francisco");
var_dump ($opuno->Equals($opuno));
var_dump ($opuno->Equals($opdos));

$opuno->setsalario(5000);

$opuno->setaumentarsalario(5);

$opdos->setsalario(15000);

echo "No se puede redeclarar el método Mostrar";

echo Operario::MostrarO($opuno);

$fabrica = new Fabrica("Los Lope");

$fabrica->Add($opuno);

//var_dump(Fabrica::Equals($fabrica,$opdos));

$fabrica->Add($opuno);
$fabrica->Add($opdos);
$fabrica->Add($optres);
$bur = new Operario(22486,"Perez","Lucía");
$fabrica->Add($bur);

$fabrica->Add($bur);
//Los new Operarios no cuentan como operarios iguales?!
$fabrica->Add(new Operario(15462,"Gutierrez","Mariano"));
$fabrica->Add(new Operario(22486,"Aguayo","María"));
$fabrica->Add(new Operario(22486,"Savala","Santiago"));

echo Fabrica::MostrarFabrica($fabrica);

echo Fabrica::MostrarCosto($fabrica);
/*
echo "<pre>";
var_dump($fabrica);
echo "</pre>";

$fabrica->Remove($opuno);
$fabrica->Remove($opdos);
$fabrica->Remove($optres);
$fabrica->Remove($bur);

echo "<pre>";
var_dump($fabrica);
echo "</pre>";*/
?>