<?php 

require_once "imostrable.php";

class localidad
{
	private $codigopostal;
	private $nombre;

	function __construct($cp,$nom){

		$this->codigopostal = $cp;
		$this->nombre = $nom;
	}

	function getcodigo()
	{
		return $this->codigopostal;
	}

	function setcodigo($codigo){
		$this->codigopostal = $codigo;
	}

	function getnombre()
	{
		return $this->nombre;
	}

	function setnombre($nombre){
		$this->nombre = $nombre;
	}

	function mostrarhtml(){

	echo "<h1>TIPO     VALOR</h1>";
	echo "<p>".gettype($this->codigopostal) . "            ".$this->codigopostal."</p>";
	echo "<p>".gettype($this->nombre) . "            ".$this->nombre."</p>";
}

}

 ?>
