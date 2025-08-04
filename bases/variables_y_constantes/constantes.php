<?php 

define('CURSO', 'PHP 8 desde cero');
define('USUARIO_1', 'Juan');
define('ANIMALES', [
    'perro',
    'gato',
    'loro',
    'tortuga',
]);

// echo CURSO;
// echo USUARIO_1;
// echo ANIMALES[0];

// if(defined('CURSO')){
//     echo "CURSO está definido";
// }

echo "Mi version de PHP es: " . PHP_VERSION;
echo "<br>";
echo "Mi sistema operativo es: " . PHP_OS;
echo "<br>";
echo PHP_EXTENSION_DIR;
echo "<br>";
echo PHP_SAPI;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__

?>
