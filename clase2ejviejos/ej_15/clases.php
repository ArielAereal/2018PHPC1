<?php

abstract class FiguraGeometrica
{
    function __construct(){
        $this->_color = "Rojo";
    }

    protected $_color;
    protected $_superficie;
    protected $_perimetro;
    
    function ToString(){
        return $this->_color;
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

class Rectangulo extends FiguraGeometrica
{
    public function Dibujar()
    {

    }
    
    protected function CalcularDatos(){

    }
}

class Triangulo extends FiguraGeometrica
{
    public function Dibujar()
    {

    }
    
    protected function CalcularDatos(){
        
    }
}


?>