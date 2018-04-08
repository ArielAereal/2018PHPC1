<?php

abstract class FiguraGeometrica
{
    
    protected $_color;
    protected $_superficie;
    protected $_perimetro;

    
    function __construct(){
        
    }

   public function ToString(){
      return "<br>Color: ". $this->_color. "<br>";
    }
    
    public abstract function Dibujar();
    
    protected abstract function CalcularDatos();
    
    function GetColor(){
        return $this->_color;
    }
    
    function SetColor($colore)
    {
        $this->_color = $colore;
    }
    
}

?>