<?php

class Operario{

    private $_apellido;
    private $_legajo;
    private $_nombre;
    private $_salario;

    

    public function __construct($legajo,$apellido,$nombre){
        $this->_legajo = $legajo;
        $this->_apellido = $apellido;
        $this->_nombre = $nombre;        
    }

    public function getlegajo(){return $this->_legajo;}   

    public function GetNombreApellido(){
        $fuera =  $this->_nombre . ", " . $this->_apellido;

        return $fuera;
    }

    public function Equals($op1){

        if($this->GetNombreApellido()===$op1->GetNombreApellido())
        {
            if($this->getlegajo()=== $op1->getlegajo()){
                return true;
            }
        }

        return false;
    }

    public function GetSalario(){return $this->_salario;}  

    public function setSalario($salario){
        
        $this->_salario = $salario;
    }
    
    
    public function setAumentarSalario($aumento){

        echo "El operario no tiene salario inicial";       

        $this->_salario = $this->_salario + $this->_salario * $aumento/100;
    }

    public function Mostrar(){

        $salida = "<br><br>Nombre y Apellido: " . $this->GetNombreApellido() . "<br>" . "Salario: " . $this->GetSalario() . "<br>" . "Legajo: " .$this->getlegajo() . "<br>";

        return $salida;
    }

    public static function MostrarO($operario){

        
       return  $operario->Mostrar();       

    }

    

}

?>