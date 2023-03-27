<?php

    //Interfaces
    interface IMascota{
        public function getNombre();
        public function getEdad();

    } 

    interface IMamifero{
        public function sonido();

    }

    //implementación de interfaces
    class Gato implements IMascota, IMamifero{
        public $name;
        public $edad;

        function __construct($_nombre, $_edad){
            $this->nombre = $_nombre;
            $this->edad = $_edad;

        }

        public function getNombre(){
            return $this->nombre;

        }
        public function getEdad(){
            return $this->edad;
        }

        public function sonido( ){echo " miau";}

    }

    $gato = new Gato(" Firulay ", 7);

    echo $gato->getNombre();
    echo $gato->getEdad();
    $gato->sonido();


?>