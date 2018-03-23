<?php

function fechas(){

	$ser = date_default_timezone_set("America/Argentina/Buenos_Aires");
	
	$fecha = date("d-m-y");	
	
	echo "<br> Ejercicio 2 <br>";
	echo "<br> Estilo de fecha y estaciones <br>";
	echo "<br>".($fecha);
	echo "<br>";
	
	$fecha_dos = date("l/D/S");
	
	echo ($fecha_dos);
	echo "<br>";
	$fecha_tres = date("d.F.Y");
	
	echo ($fecha_tres);
	echo "<br>";
	
	$est = date("m");
	
	$dia = date("d");
	
	switch ($est) {
		case '1':
		
		echo "Verano";
			# code...
			break;
			case '2':
		echo "Verano";
			# code...
			break;
			case '3':
			if($dia>20)
		{
			echo "Otoño";
		} else {
			echo "Verano";
		}
		
			# code...
			break;
			case '4':
		echo "Otoño";
			# code...
			break;
			case '5':
		echo "Otoño";
			# code...
			break;
			case '6':
			if($dia>21)
		{
			echo "Invierno";
			
		} else {
			echo "Otoño";		
		}
		
			# code...
			break;
			case '7':
		echo "Invierno";
			# code...
			break;
			case '8':
		echo "Invierno";
			# code...
			break;
			case '9':
			if($dia>22)
		{
			echo "Primavera";
		} else {
			echo "Invierno";
		}
		
			# code...
			break;
			case '10':
		echo "Primavera";
			# code...
			break;
			case '11':
		echo "Primavera";
			# code...
			break;
			case '12':
			if($dia>21)
		{
			echo "Verano";
		} else {
			echo "Primavera";
		}	
			# code...
			break;
	
		
		default:
			# code...
			break;
	}
	
	echo "<br> <br> En las regiones ecuatoriales de la Tierra (donde pasa el paralelo 0°) las estaciones son sólo dos: la estación seca y la estación lluviosa; ya que en ellas varía drásticamente el régimen de lluvias, pero no varía mucho la temperatura. <br>";
}


?>