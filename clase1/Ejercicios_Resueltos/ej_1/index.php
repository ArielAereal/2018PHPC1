<?php   

 function sumamil(){

    echo "<br> Ejercicio 1 <br>";
    echo " <br> Sumar hasta mil: ";
    
    $suma = 0;
    $i;
    
    for ($i=0; $suma < 1000; $i++) { 
    
        if (($suma + $i)>1000){
            $i--;
            break;
        }
        
        $suma = $suma + $i;
    
    }
    
    echo $suma;
    
    echo "<br> Cantidad de numeros sumados: ". $i;
    
    echo "<br>";
}


?>