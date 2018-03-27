<?php 


require_once "entidades/localidad.php";
require_once "entidades/direccion.php";
require_once "entidades/persona.php";
require_once "entidades/alumno.php";
require_once "entidades/profesor.php";


$alguien = new alumno("Alan","Scadler",65999347,new direccion("San Martín",133,new localidad(1492,"Avellaneda")),800,date("d-m"));

$conurbano = new localidad(1855,"Quilmes");

$lacasa = new direccion("Franco Alvarez",156,$conurbano);

$mate = array ("Geografía","Política", "Narcotráfico");

$dei = array ("Lunes","Martes","Jueves");

$profe = new profesor("Alan","Drexler",78555332,new direccion($lacasa->getcalle(),$lacasa->getaltura(),new localidad($lacasa->getlocalidad()->getcodigo(),$lacasa->getlocalidad()->getnombre())),$mate,$dei);

$alum = new alumno("Ignacio","Copani",54333218,new direccion("calle 13",18,new localidad(1999,"Lanús")),600,date("d-m"));

$loca = new localidad(1492,"Avellaneda");

$dires = new direccion ("La cruzada", 160,$loca);

$erias = array("Biología","Reciclaje","Medioambiente");

$dios = array("Miercoles","Viernes","Sabado");

$prodos = new profesor("Christian","Shlenker",15666427,$dires,$erias,$dios);

$lida = new localidad (1999, "Lanús");

$esion = new direccion("Catamarca",1778,$lida);

$lastal = new alumno("Jacinto","Stimbal",75444315,$esion,757,"01-01");

$direcs = new direccion("Donovan",1900,$conurbano);


$altru = array("Filosofía", "Control de masas", "Criminología Olímpica");

$diesos = array("Lunes","Miércoles","Viernes");

$ultor = new profesor("Jorge", "Kobol",14555789,$direcs,$altru,$diesos);

$dir1 = new direccion("Hornillos",18,$lida);

$dir2 = new direccion ("San Pablo", 1147,$conurbano);

$dir3 = new direccion("Realeza", 78,$loca);

$dir4 = new direccion("El cascabel",556,$conurbano);

$dir5 = new direccion ("El noble", 6778,$loca);

$dir6 = new direccion("Romano",447,$lida);


$combo = array($alguien,$profe,$alum,$prodos,$lastal,$ultor,$loca,$conurbano,$lida,$dir1,$dir2,$dir3,$dir4,$dir5,$dir6);

echo "<pre>";


foreach ($combo as $key => $value) {

	$value->mostrarhtml();
	# code...
}


echo "</pre>";



 ?>