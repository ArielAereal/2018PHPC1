<?php

class Vuelo{

    
private $_fecha;   
private $_empresa;
private $_precio;
private $_cantMaxima;
private $_listaDePasajeros;

public function __construct($empresa,$precio,$cantMaxima = 0){

    $this->_empresa = $empresa;
    $this->_precio = $precio;
    $this->_cantMaxima = $cantMaxima;
    $this->_listaDePasajeros = array();
}

public function getfecha(){
    return $this->_fecha;
}

public function setfecha($fecha){
    $this->_fecha = $fecha;
}

public function getempresa(){
    return $this->_empresa;
}

public function setempresa($empresa){
    $this->_empresa = $empresa;
}
public function getprecio(){
    return $this->_precio;
}

public function setprecio($precio){
    $this->_precio = $precio;
}
public function getcantMaxima(){
    return $this->_cantMaxima;
}

public function getlistaDePasajeros(){
    return $this->_listaDePasajeros;
}

public function GetInfoVuelo(){

    $salida = "Fecha: " . $this->getfecha() . " Empresa: " . $this->getempresa() . " Precio: ". $this->getprecio()." Cantidad Máxima Pasajeros: " . $this->getcantMaxima(). "<br><br>";

    // concatenar todos los pasajeros

    if(count($this->getlistaDePasajeros())!== null){

        $salida = $salida." Lista de Pasajeros: <br>";

        foreach ($this->getlistaDePasajeros() as $key => $value) {        
            $salida = $salida . $value->GetInfoPasajero()."<br>";
        }

    }else {
        echo "No hay pasajeros asignados";
    }

    return $salida;
}


public function Equals($unpasajero){

    if(count($this->getlistaDePasajeros())!== null){

        foreach ($this->getlistaDePasajeros() as $key => $value) {
         if($value->Equals($unpasajero)){
             return true;
         }
         
        }

        return false;       

    }else {
        echo "No hay pasajeros asignados";
    }  

}


public function AgregarPasajero ($elpasajero) {   

    if(count($this->getlistaDePasajeros())!= null){

        if(count($this->getlistaDePasajeros())<$this->getcantMaxima())
            {
        if($this->Equals($elpasajero) === true)
        {
            echo "<br>El pasajero se encuentra sentado <br><br>";
            return false;
        }
        else{
           
            $this->_listaDePasajeros[] = $elpasajero;    
            return true;
        }
     
    }else {       
        echo "<br>vuelo completo<br><br>";
        return false;
    }
}  else {
        $this->_listaDePasajeros[] = $elpasajero;
        return true;
    }  
}

public function MostrarVuelo(){
    echo $this->GetInfoVuelo();
}

public static function Add($unvuelo,$otrovuelo){

    $salida = $unvuelo->ValorVuelo()+$otrovuelo->ValorVuelo();
 
    return $salida;
}

public function ValorVuelo(){
    $total = 0;

    if(count($this->getlistaDePasajeros())!== null){
        foreach ($this->getlistaDePasajeros() as $key => $value) {        
            if($value->getesPlus()){
                $total = $total + $this->getprecio()*0.8;
            }else {
                $total = $total + $this->getprecio();
            }

        }
    }
    return $total;    
}

public static function Remove($vuelo,$pasajero){

    $rem;

  if($vuelo->Equals($pasajero)){
    $rem = array_search($pasajero,$vuelo->_listaDePasajeros);
    unset($vuelo->_listaDePasajeros[$rem]);
  }else {
      echo "<br>El pasajero no existe en el vuelo<br><br>";
  }
    return $vuelo;
}

}

?>