<?php   


echo "Sumar hasta mil";

$suma = 0;
$i;

for ($i=0; $suma < 1000; $i++) { 

    if (($suma + $i)>1000){
        break;
    }
    
    $suma = $suma + $i;

}

echo $suma;

?>