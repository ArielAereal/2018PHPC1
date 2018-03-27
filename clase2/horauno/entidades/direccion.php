<?php 

require_once "imostrable.php";

class direccion{

	private $calle;
	private $altura;
	private $localidad;

	function __construct($ca,$alt,$loc)
	{
		$this->calle = $ca;
		$this->altura = $alt;
		$this->localidad = $loc;
	}

	function getcalle(){

		return $this->calle;
	}

	function setcalle($calle){

		$this->calle = $calle;
	}

	function getaltura(){

		return $this->altura;
	}

	function setaltura($altura){

		$this->altura = $altura;
	}

	function getlocalidad(){

		return $this->localidad;
	}

	function setlocalidad($localidad){

		$this->localidad = $localidad;
	}

	function mostrarhtml(){

	echo "<h1>TIPO     VALOR</h1>";
	echo "<p>".gettype($this->calle) . "            ".$this->calle."</p>";
	echo "<p>".gettype($this->altura) . "            ".$this->altura."</p>";
	echo "<p>".gettype($this->localidad) . "            ".$this->localidad->mostrarhtml()."</p>";
}

}


 ?>