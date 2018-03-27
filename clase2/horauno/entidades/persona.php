<?php 

require_once "imostrable.php";

abstract class persona implements Imostrable{

	protected $nombre;
	protected $apellido;
	protected $dni;
	protected $direccion;

	function __construct ($nom,$ape,$dni,$dir){

	$this->nombre = $nom;
	$this->apellido = $ape;
	$this->dni = $dni;
	$this->direccion = $dir;

	}

function getnom(){
	return $this->nombre;
}

function getape(){
	return $this->apellido;
}

function getdni(){
	return $this->dni;
}

function getdir(){
	return $this->direccion;
}

function setnom($nombre){
	$this->nombre = $nombre;
}

function setape($apellido){
	$this->apellido = $apellido;
}
function setdni($dni){
	$this->dni = $dni;
}
function setdir($direccion){
	$this->direccion = $direccion;
}

function mostrarhtml(){

	echo "<h1>TIPO     VALOR</h1>";
	echo "<p>".gettype($this->nombre) . "            ".$this->nombre."</p>";
	echo "<p>".gettype($this->apellido) . "            ".$this->apellido."</p>";
	echo "<p>".gettype($this->dni) . "            ".$this->dni."</p>";	
	echo "<p>".gettype($this->direccion) . "            ".$this->direccion->mostrarhtml()."</p>";
}

}


 ?>