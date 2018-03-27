<?php 




// revisar el tema del array de materias y de días al mostrar
class profesor extends persona {
	private $materias;
	private $dias;

	function __construct($nombre,$apellido,$dni,$direccion,$materias,$dias)
	{
		parent::__construct($nombre,$apellido,$dni,$direccion);
		$this->materias = $materias;
		$this->dias = $dias;
	}


	function getmaterias(){

		return $this->materias;
	}

	function setmaterias($materias){

		$this->materias = $materias;
	}

	function getdias(){

		return $this->dias;
	}

	function setdias($dias){

		$this->dias = $dias;
	}

	function mostrarhtml(){

		parent::mostrarhtml();
		echo "<p>".gettype($this->materias)."</p>";
		
			foreach ($this->materias as $key => $value) {

					echo "<p>".gettype($value) . "            ".$value."</p>";
					# code...
				}

		echo "<p>".gettype($this->dias)."</p>";
		foreach ($this->dias as $key => $value) {

					echo "<p>".gettype($value) . "            ".$value."</p>";
					# code...
				}
	}
}


 ?>