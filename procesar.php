<?php
    $nombre =  $_REQUEST['name']; //$_GET['name']; // $_POST['name'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];

    $image = $_FILES['image'];

    echo "<p>El nombre del usuario es: $nombre </p>";
    echo "<p>La edad del usuario es: $edad </p>";
    echo "<p>El sexo del usuario es: $sexo </p>";
    echo "<p>El/los rol/es del usuario es/son: </p>";

    echo "<ul>";
    foreach ($roles as $indice => $rol) {
        echo "<li>$rol</li>";
    }
    echo "</ul>";

    var_dump($image);
?>