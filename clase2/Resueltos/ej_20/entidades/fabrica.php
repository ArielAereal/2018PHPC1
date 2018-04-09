<?php

class Fabrica{

    private $_cantMaxOperarios;
    private $_operarios;
    private $_razonSocial;

    public function __construct ($razonSocial){

        $this->_operarios = array();

        $this->_cantMaxOperarios = 5;

        $this->_razonSocial = $razonSocial;

    }

    public function getoperarios(){return $this->_operarios;}
    
    public function getcantMaxOperarios(){return $this->_cantMaxOperarios;}
    

    private function RetornarCostos(){

        $gasto = 0;
        if(count($this->getoperarios()==null))
        {
            echo "Sin operarios";
        } else {
            foreach ($this->getoperarios() as $key => $value) {
                
                $gasto = $gasto + $value->getsalario();
            }
        }

        return $gasto;
    }

    private function MostrarOperarios(){
        if(count($this->getoperarios()==null))
        {
            echo "Sin operarios";
        } else {
            foreach ($this->getoperarios() as $key => $value) {
                
               echo Operario::Mostrar($value);
            }
        }
    }

    public static function MostrarCosto($fabric){
        echo $fabric->RetornarCostos();
    }

    public static function Equals($fabrica,$empleado){
           
         foreach ($fabrica->getoperarios() as $key => $value) {

                if($empleado === $value)
                {
                    return true;
                }
         }
            return false;
        }
    

    public function Add($operario){
        
        if(count($this->getoperarios()) < $this->getcantMaxOperarios()){
       

            if(Fabrica::Equals($this,$operario)){
                echo "El operario se encuentra trabajando";
                return false;
            } else{                                   
                 $this->_operarios[] = $operario;
                    return true;                
            } 
        } else {
            echo "La fábrica está completa";
            return false;
        }
       

    }

    public function Remove($operario){

        
       
            if(Fabrica::Equals($this,$operario)){
               
                $fabricarem = $this->getoperarios();

                $ubicar = array_search($operario,$this->getoperarios());

                unset($fabricarem[$ubicar]);

                $this->_operarios = $fabricarem;                

                return true;
             
            }

            return false;

    }



}


?>