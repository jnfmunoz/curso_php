<?php
    class Persona{
        public $nombre, $apellido, $edad;

        public function __construct(){        
        }

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre);

        }

        public function getNombre(){
            return ucwords($this->nombre);
        }

    }

?>