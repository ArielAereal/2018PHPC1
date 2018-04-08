<?php

class Garage{

private $_razonSocial;

private $_precioPorHora;

private $_autos;

public function __construct($razonsocial,$preciohora=0){

    $this->_razonSocial = $razonsocial;

    if($preciohora != 0)
    {
        $this->_precioPorHora = $preciohora;
    } 
    
    $_autos = array();

}

public function getrazonSocial(){
    return $this->_razonSocial;
}

public function setrazonSocial($razonSocial){
    $this->_razonSocial = $razonSocial;
}

public function getprecioPorHora(){
    return $this->_precioPorHora;
}

public function setprecioPorHora($precioPorHora){
    $this->_precioPorHora = $precioPorHora;
}

public function getautos(){
    return $this->_autos;
}

public function setautos($autos){
    $this->_autos = $autos;
}

public function MostrarGarage(){

    echo "<br> MOSTRAR GARAGE <br><br>";

    echo "<br>Razón Social: ". $this->getrazonSocial(). "<br><br>";

    echo "<br>Precio por hora: ". $this->getprecioPorHora(). "<br><br>";

    echo "<br>Autos: <br><br>";

    if(count($this->getautos())!=null)
    {
        foreach ($this->getautos() as $key => $value) {
            
            $numauto = $key + 1;
            echo "Auto número ". $numauto;
            echo "<br>";
            
            Auto::MostrarAuto($value);

            echo "<br>";
        }
    }else{
        echo "no hay autos ingresados en el garage";
    }


}

public function Equals($unauto){

    echo "<br> EQUALS <br><br>";

    if(count($this->getautos())!=null)
    {
        foreach ($this->getautos() as $key => $value) {

            if($value->Equals($unauto)){
                return true;
            } 

        }

        return false;
    }else{
            echo "no hay autos ingresados en el garage";
        }
    
}

public function Add($unauto){ 
    
    echo "<br> ADD <br><br>";

    if($this->Equals($unauto))
    {
        echo "<br>El auto ya está adentro<br><br>";
    }else {
    
    if($this->getautos()==null)
    {
        $arra = array($unauto);

        $this->setautos($arra);    
    }else {

        $arra = $this->getautos();
        array_push($arra,$unauto);

        $this->setautos($arra);
    }
    }
}

public function Remove($unauto){

    echo "<br> REMOVE <br><br>";

    if($this->Equals($unauto))
    {
    $key = array_search($unauto,$this->getautos());

        $final = $this->getautos();
        unset($final[$key]);

          $this->setautos($final);
        
        
    }else {
        echo "<br>El auto no está en el garage<br><br>";
    }
}

}

?>


