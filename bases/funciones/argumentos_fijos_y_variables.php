<?php

function valoracion($nombre, $rating = 5){

    echo "$nombre tiene un rating de $rating";
}

function concatenar(...$palabras){

    $resultado = "";

    foreach($palabras as $palabra){

        $resultado .= $palabra . " ";

    }

    echo $resultado;
}

// valoracion("Curso PHP 8 desde cero");
concatenar("Curso", "PHP", "8", "desde", "cero");

?>
