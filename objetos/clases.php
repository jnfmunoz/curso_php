<?php

require_once('clases/Persona.php');
/** Clases */
// $persona1->setNombre("ZlAtan");
// $persona1->apellido = "Ibrahimovic";
// $persona1->edad = 43;

// $persona2->nombre = "Viktor";
// $persona2->apellido = "Gyökeres";
// $persona2->edad = 27;

// var_dump($persona1); 
// echo "<br>";
// var_dump($persona2);

// $persona1 = new Persona("ZlAtan", "Ibrahimovic", 43);
// $persona2 = new Persona("Viktor", "Gyökeres", 27);

// echo "El nombre de la persona 1 es: " . $persona1->getNombre();
// echo "<br>";
// echo "El nombre de la persona 2 es: " . $persona2->getNombre();

/** Herencia */
$peruano = new Peruano;
$peruano -> setNombre("paolo");
$peruano -> setApellidos("Guerrero", "");

echo "<br>";

var_dump($peruano);

$chileno = new Chileno;
$chileno -> setApellidos("Paredes", "Quintanilla");
echo $chileno -> getApellidos();

?>