<?php
    class Persona{
        public $nombre, $apellido, $edad;

        public function __construct(){
            // voy en la clase 23 min 20.56
            // https://www.youtube.com/watch?v=BSsx7QGlhpo&list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&index=31
        }

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre);

        }

        public function getNombre(){
            return ucwords($this->nombre);
        }

    }

?>