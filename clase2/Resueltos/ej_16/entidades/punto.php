<?php

class punto
{
    private $_x;
    private $_y;

    function __construct($x,$y){
        $this->_x = $x;
        $this->_y = $y;
    }

    function getx(){
        return $this->_x;
    }    

    function gety(){
        return $this->_y;
    }

    
}


?>