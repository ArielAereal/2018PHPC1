<?php

function glup($arrc)
{    
    krsort($arrc);
    
    foreach ($arrc as $key => $value) {
        echo $value;
    }    
}

$palabra = array('h','o','l','a');
glup($palabra);

?>