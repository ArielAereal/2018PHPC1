<?php

$ser = date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha = date("d-m-y");

echo ($fecha);


$fecha_dos = date("l/D/S");

echo ($fecha_dos);

$fecha_tres = date("d.F.Y");

echo ($fecha_tres);

var_dump($ser);

?>