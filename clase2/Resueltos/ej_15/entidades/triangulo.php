<?php

class Triangulo extends FiguraGeometrica
{
    private $_base;
    private $_altura;

    function __construct($base,$altura)
    {
        parent::__construct();
        $this->_base = $base;
        $this->_altura = $altura;

        $this->CalcularDatos();

    }
    
    protected function CalcularDatos(){
        
        $this->_superficie = $this->_base * $this->_altura /2;

        $this->_perimetro = $this->_base * 3 ; // si fuera rectángulo, necesito calcular la hipotenusa
    }

    // dibuja pero no retorna
    public function Dibujar(){

        $salida ="";

        $salida = $salida .  "<font color='".$this->getcolor()."'>";
        if($this->_altura == 2)
        {
            $salida = $salida .  "_*_"."<br>";
            if($this->_base == 2)
            {

                $salida = $salida .  "**_";
            }elseif($this->_base == 3)
            {
                $salida = $salida .  "***";
            }
            
        }else{
            if($this->_altura == 3)
            {
                $salida = $salida .  "__*__"."<br>";
                $salida = $salida .  "_***_"."<br>";
            } if($this->_base == 5)
            {
                $salida = $salida .  "*****";
            }
        }
        $salida = $salida .  "</font>";

        return $salida;
    }

    public function ToString(){
        return parent::ToString()."<br>Superficie: ". $this->_superficie."<br>"."<br>Perímetro: " . $this->_perimetro."<br>"."<br>Base: " . $this->_base."<br>"."<br>Altura: " . $this->_altura."<br>";
    }
}


?>