<?php


function esPar($tero){
    
    if($tero % 2 == 0)
    {
        return true;
    }else{
        return false;
    }
    
}

function esImpar($tero){
    
    if( esPar($tero) == true)
    {
        return false;
    }else {
        return true;
    }
}


echo "Ejercicio 14 <br>";
echo "Funciones par e impar <br>";

echo "<br>";

echo "ES PAR: 2-3-7-10<br>";
var_dump (esPar(2))."<br>";
var_dump (esPar(3))."<br>";
var_dump (esPar(7))."<br>";
var_dump (esPar(10))."<br>";

echo "<br>ES IMPAR: 2-3-7-10<br>";
var_dump (esImpar(2))."<br>";
var_dump (esImpar(3))."<br>";
var_dump (esImpar(7))."<br>";
var_dump (esImpar(10))."<br>";

?>