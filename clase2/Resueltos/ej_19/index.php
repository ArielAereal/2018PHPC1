<?php

include "entidades/pasajero.php";
include "entidades/vuelo.php";

$costodoble;

$pasa = new Pasajero("Juarez","Juanito",354,true);

$pasados = new Pasajero("Sandals","Josefina",999,false);

$crucero = new Vuelo("Braile",10,5);

$crucero->setfecha(date("d-m-Y"));

$crucero->AgregarPasajero($pasa);

$crucero->AgregarPasajero($pasa);

$crucero->AgregarPasajero($pasados);

$crucero->MostrarVuelo();

$batido = new Vuelo("Marina S.A.",50,6);



$batido->AgregarPasajero($pasa);

$batido->AgregarPasajero($pasados);

$batido->AgregarPasajero(new Pasajero("Gomez","Cecilia",156,true));

$costodoble = Vuelo::Add($crucero,$batido);   

echo $costodoble;

$batido->MostrarVuelo();

Vuelo::Remove($crucero,new Pasajero("Gomez","Cecilia",156,true));

$batidomenos = Vuelo::Remove($batido,new Pasajero("Gomez","Cecilia",156,true));

$batidomenos->MostrarVuelo();



?>