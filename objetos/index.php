<?php

    require_once('clases/Persona.php');

    $persona1 = new Persona;

    $persona1->setNombre("JuAn FrAncIsco");
    $persona1->apellido = "Muñoz Grau";
    $persona1->edad = 26;

    $persona2 = new Persona;

    $persona2->nombre = "Camilo Andrés";
    $persona2->apellido = "Muñoz Grau";
    $persona2->edad = 29;

    // var_dump($persona1);
    // echo "<br>";
    // var_dump($persona2);

    echo "El nombre de la persona 1 es: " . $persona1 -> getNombre() . " " . $persona1 -> apellido;
    echo "<br>";
    echo "El nombre de la persona 2 es: " . $persona2 -> nombre . " " . $persona2 -> apellido;

?>