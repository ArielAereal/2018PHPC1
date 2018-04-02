<?php

function glup ($palabra, $max){

   if (strlen($palabra) > $max)
   {
    echo "la palabra ".$palabra." es muy larga <br>";
   }

   if ($palabra === "Recuperatorio" || $palabra === "Parcial" || $palabra === "Programacion")
   {
     echo "la palabra se encuentra en el listado validado<br>";
     return 1;
   }
    
   return 0;
}

echo "Ejercicio 13 <br>";
echo "Validaciones <br>";

echo "<br><br> Si la palabra excede al máximo: ";

glup ("durazno",3);

echo glup("navio",25). "<br>";

// parcial con minuscula no lo detecta
echo glup ("Parcial",65). "<br>";

glup ("Celeridademocional",15);


?>