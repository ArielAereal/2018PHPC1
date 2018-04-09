<?php

class Pasajero{

private $_apellido;   
private $_nombre;
private $_dni;
private $_esPlus;

public function __construct($apellido,$nombre,$dni,$plus){

    $this->_apellido = $apellido;
    $this->_nombre = $nombre;
    $this->_dni = $dni;
    $this->_esPlus = $plus;
}

public function getapellido(){
    return $this->_apellido;
}

public function setapellido($apellido){
    $this->_apellido = $apellido;
}

public function getnombre(){
    return $this->_nombre;
}

public function setnombre($nombre){
    $this->_nombre = $nombre;
}
public function getdni(){
    return $this->_dni;
}

public function setdni($dni){
    $this->_dni = $dni;
}
public function getesPlus(){
    return $this->_esPlus;
}

public function setesPlus($esPlus){
    $this->_esPlus = $esPlus;
}


public function Equals($unpasajero){

    if($this->getdni()===$unpasajero->getdni())
    {
        return true;
    }else {
        return false;
    }

}

public function GetInfoPasajero(){

    $salida = "Apellido: " . $this->getapellido() . " Nombre: " . $this->getnombre() . " DNI: ". $this->getdni()." Pasajero VIP: ";

    if($this->getesPlus()== false){
        $salida = $salida . 0;
    }else{

       $salida = $salida . $this->getesPlus();
    }
    return $salida;
}

public static function MostrarPasajero ($elpasajero) {

   echo $elpasajero->GetInfoPasajero();    

}

}

?>