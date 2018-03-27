<?php 

class alumno extends persona {

	private $legajo;
	private $fechainscr;

	function __construct($nombre,$apellido,$dni,$direccion,$legajo,$fecha)
	{
		parent::__construct($nombre,$apellido,$dni,$direccion);
		$this->legajo = $legajo;
		$this->fechainscr = $fecha;
	}

	function getlegajo(){

		return $this->legajo;
	}

	function setlegajo($legajo){

		$this->legajo = $legajo;
	}

	function getfechainscr(){

		return $this->fechainscr;
	}

	function setfechainscr($fechainscr){

		$this->fechainscr = $fechainscr;
	}

	function mostrarhtml(){

		parent::mostrarhtml();
		echo "<p>".gettype($this->legajo) . "            ".$this->legajo."</p>";
		echo "<p>".gettype($this->fechainscr) . "            ".$this->fechainscr."</p>";
	}

}

 ?>