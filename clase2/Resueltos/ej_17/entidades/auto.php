<?php

class Auto{

    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

   public function __construct($marca,$color,$precio =0,$fecha = "01-01-1901")
    {
        $this->_marca = $marca;
        $this->_color = $color;

        if($precio != 0)
        {
            $this->_precio = $precio;
        }

        if($fecha != "01-01-1901")
        {
            $this->_fecha = $fecha;
        }
    }

   public function getcolor(){
        return $this->_color;
    }

   public function setcolor($color){
        $this->_color = $color;
    }

   public function getprecio(){
        return $this->_precio;
    }

   public function setprecio($precio){
        $this->_precio = $precio;
    }

   public function getmarca(){
        return $this->_marca;
    }

   public function setmarca($marca){
        $this->_marca = $marca;
    }

   public function getfecha(){
        return $this->_fecha;
    }

   public function setfecha($fecha){
        $this->_fecha = $fecha;
    }

   public function AgregarImpuestos($aumento){
        $this->setprecio($this->getprecio()+$aumento);
    }

    public static function MostrarAuto($auto){      

        echo "<br>Marca: ".$auto->getmarca()."<br>";
        echo "<br>Color: ".$auto->getcolor()."<br>";
        echo "<br>Precio: ".$auto->getprecio()."<br>";
        echo "<br>Fecha: ".$auto->getfecha()."<br>";
    }

    public function Equals($unauto){
        if($unauto->getmarca()=== $this->getmarca())
        {
            return true;
        }else{
            return false;
        }
    }

    public static function Add($unauto,$otroauto){
        if($unauto->Equals($otroauto)){
            if($unauto->getcolor()=== $otroauto->getcolor())
            {
                return $unauto->getprecio() + $otroauto->getprecio();
            } else {
                echo "No son del mismo color <br>";
                return 0;
            }
        } else {
            echo "No son de la misma marca <br>";
            return 0;
        }
    }


}

?>