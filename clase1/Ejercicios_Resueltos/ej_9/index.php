<?php

function lap(){
    
    echo "<br><br><br> Ejercicio 9 <br>";
    echo "Las lapiceras <br> <br>";

    $lapicera_1 = array('color'=>'azul','marca'=>'Silvapen','trazo'=>'grueso','precio'=>18.70);

    $lapicera_2 = array('color'=>'verde','marca'=>'Firestone','trazo'=>'hiperfino','precio'=>45);

    $lapicera_3 = array('color'=>'amarillo','marca'=>'Federer','trazo'=>'grueso','precio'=>28);

    echo "Lapicera 1 <br><br>";
    foreach ($lapicera_1 as $key => $value) {

        
        echo $key. ": " . $value."<br>";

    }
    echo "<br>Lapicera 2 <br><br>";
    foreach ($lapicera_2 as $key => $value) {

        
        echo $key. ": " . $value."<br>";

    }
    echo "<br>Lapicera 3 <br><br>   ";
    foreach ($lapicera_3 as $key => $value) {

        echo $key. ": " . $value."<br>";

    }
}

?>