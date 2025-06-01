<?php
    
/* 
    $array = [1,2,3];
    list($a, $b, $c) = $array;
    echo $b; 
*/ 

/*
$array = range(10,20);
var_dump($array); // información sobre una variable
echo "<br>" . count($array);
*/

$array = ["Juan", "Francisco", "Luis", "Elizabeth", "Iris"];

unset($array[3]); // eliminar un indice

if (in_array("Elizabeth", $array)){
    echo "El valor buscado se encuentra dentro del array";
} else {
    echo "El valor buscado no se encuentra dentro del array";
}

?>