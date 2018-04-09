<?php

class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno;
    private $_ladoDos;

    function __construct($lado1,$lado2){
        parent::__construct();

        $this->_ladoUno = $lado1;
        $this->_ladoDos = $lado2;

        $this->CalcularDatos();

    }

    public function Dibujar()
    { 
        
        // me cuesta que retorne el dibujo, 
        // ver la funcion array to string o algo así.
        

        $salida ="";

        for ($i=0; $i < $this->_ladoUno; $i++) { 
            for ($j=0; $j < $this->_ladoDos ; $j++) { 
                
          //      $dibujo[] = "*";
            $salida = $salida . "<font color='".$this->getcolor()."'>*";
            }

            //$dibujo[]= "<br>";
            $salida = $salida . "<br>";
        }
        $salida = $salida . "</font>";
        
        return $salida;
    }
    
    protected function CalcularDatos(){

        $this->_superficie = $this->_ladoUno * $this->_ladoDos;

        $this->_perimetro = (2*$this->_ladoUno)+(2*$this->_ladoDos);
    }

    public function ToString(){
       return parent::ToString()."<br>Superficie: ". $this->_superficie."<br>"."<br>Perímetro: " . $this->_perimetro."<br>"."<br>Lado Uno: " . $this->_ladoUno."<br>"."<br>Lado Dos: " . $this->_ladoDos."<br>";
    }
}

?>