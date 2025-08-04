<?php

$nombre =  $_REQUEST['name']; //$_GET['name']; // $_POST['name'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$mensaje = $_REQUEST['mensaje'];

$image = $_FILES['image'];
$patch = $_SERVER['DOCUMENT_ROOT'] . '/curso_php/bases/formularios/imagenes/' . $image['name'];

echo "<p>El nombre del usuario es: $nombre </p>";
echo "<p>La edad del usuario es: $edad </p>";
echo "<p>El sexo del usuario es: $sexo </p>";
echo "<p>El/los rol/es del usuario es/son: </p>";

echo "<ul>";
foreach ($roles as $indice => $rol) {
    echo "<li>$rol</li>";
}
echo "</ul>";

// echo $patch;
// var_dump($image);

move_uploaded_file($image['tmp_name'], $patch);

echo "<p>Mensaje: $mensaje </p>";

?>