<?php

function multi(){
    
    echo "<br><br><br> Ejercicio 10 <br>";
    echo "Pack de lapiceras <br> <br>";

    $lapicera_1 = array('color'=>'azul','marca'=>'Silvapen','trazo'=>'grueso','precio'=>18.70);

    $lapicera_2 = array('color'=>'verde','marca'=>'Firestone','trazo'=>'hiperfino','precio'=>45);

    $lapicera_3 = array('color'=>'amarillo','marca'=>'Federer','trazo'=>'grueso','precio'=>28);

    $nombres = array('Juanita'=>$lapicera_1,'Anabel'=>$lapicera_2,'Marcos'=>$lapicera_3);

    $cantidad = array($lapicera_1,$lapicera_2,$lapicera_3);

    $bun;

    echo "LAPICERAS POR NOMBRE <br><br>";

    foreach ($nombres as $key => $value) {

        echo "Lapicera de ".$key."<br><br>";

        foreach ($value as $llave => $valor) {

            echo $llave. ": " . $valor."<br>";
            # code...
        }

        echo "<br>";
        # code...
    }

echo "LAPICERAS POR ORDEN DE PRIORIDAD <br><br>";

foreach ($cantidad as $key => $value) {

    $bun = $key + 1;
    echo "Lapicera número ".$bun."<br><br>";

    foreach ($value as $llave => $valor) {

        echo $llave. ": " . $valor."<br>";
        # code...
    }

    echo "<br>";
    # code...
}

}

?>