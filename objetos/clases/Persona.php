<?php

class Persona{

    public $nombre, $edad; // propiedades - attr(??
    public $apellido1, $apellido2;
    
    // public function __construct($nombre, $apellido){
    //     $this -> nombre = strtolower($nombre);
    //     $this -> apellido = strtolower($apellido);    
    //     $this -> edad = $edad;
    // }     

    public function setNombre($nombre){
        $this -> nombre = ucfirst($nombre);
    }

    public function setApellidos($apellido1, $apellido2){
        $this -> apellido1 = $apellido1;
        $this -> apellido2 = $apellido2;
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function getApellidos()
    {
        return $this.apellido1 . " " . $this.apellido2;
    }
}

class Peruano extends Persona{    

    public $departamento, $ciudad;
}

class Chileno extends Persona{

    public $comuna, $region;

    public function setApellidos($apellido1, $apellido2){
        $this -> apellido1 = $apellido2;
        $this -> apellido2 = $apellido1;
    }
}

?>

<!-- clase 24  -->
<!-- https://www.youtube.com/watch?v=_9V0k7subus&list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&index=27 -->
<!-- min 8.49 -->