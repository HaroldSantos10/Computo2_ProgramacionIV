<?php

    //Interfaces
    interface IVolante{
        public function girar();

    }

    interface IPito{
        public function pitar();
    }

    //implementación de interfaces
    class Coche implements IVolante, IPito{
        public $direccion;
        public $sonido;

        //constructor de la clase Coche
        function __construct($_direccion, $_sonido){
            $this->direccion = $_direccion;
            $this->sonido = $_sonido;

        }

        public function girar(){
            return "El Carro mueve su dirección hacía la ". $this->direccion. "</br>";

        }
        public function pitar(){
            return " El Carro comienza pitar con el sonido ". $this->sonido;
        }


    }

    $coche = new Coche(" Derecha ", " ¡piiii!, ¡piiii! ");

    echo $coche->girar();
    echo $coche->pitar();


?>