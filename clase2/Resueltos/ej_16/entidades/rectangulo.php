<?php


/*Calcular los datos, mostrar datos to string  y dibujar en la pantalla */
class rectangulo
{
    private $_vertice1;

    private $_vertice3;

    private $_vertice2;
    
    private $_vertice4;

    public $area;

    public $ladoUno;
    public $ladoDos;

    public $perimetro;

    

    function __construct($vertice1,$vertice3){
        $this->_vertice1 = $vertice1;
        $this->_vertice3 = $vertice3;
        $this->_vertice2 = new punto($this->_vertice1->getx(),$this->_vertice3->gety());
        $this->_vertice4 = new punto($this->_vertice3->getx(),$this->_vertice1->gety());

        $this->generardatos();
        
    }

    function getvertice1(){
        return $this->_vertice1;
    }

    function setvertice1($vertice1){
        $this->_vertice1 = $vertice1;
    }

    function getvertice2(){
        return $this->_vertice2;
    }

    function setvertice2($vertice2){
        $this->_vertice2 = $vertice2;
    }

    function getvertice3(){
        return $this->_vertice3;
    }

    function setvertice3($vertice3){
        $this->_vertice3 = $vertice3;
    }
    function getvertice4(){
        return $this->_vertice4;
    }

    function setvertice4($vertice4){
        $this->_vertice4 = $vertice4;
    }
    
    function generardatos(){

        $this->ladoUno = $this->_vertice4->getx() - $this->_vertice1->getx();
        $this->ladoDos = $this->_vertice3->gety() - $this->_vertice4->gety();;

        $this->area = $this->ladoUno * $this->ladoDos;
        $this->perimetro = 2*$this->ladoUno + 2*$this->ladoDos;        

    }  
    
    function draw(){
 
        // me cuesta que retorne el dibujo, 
        // ver la funcion array to string o algo así.
        
        for ($i=0; $i < $this->ladoDos; $i++) { 
            for ($j=0; $j < $this->ladoUno ; $j++) {                 
        
            echo "*";
            }        
            echo "<br>";
        }
    
        return "<br>Lado Uno: ".$this->ladoUno."<br><br>Lado Dos: ".$this->ladoDos."<br><br>Área: ".$this->area."<br><br>Perímetro: ".$this->perimetro;
    }
    
    
}


?>