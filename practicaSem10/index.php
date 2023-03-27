<?php

    //clase abstracta
    abstract class Mascota{
        public $nombre;

        public function saludar(){
            echo "Funcion no abstracta";

        }
        //metodo abstracto que será sobreescrito en la instancia
        abstract function getNombre();

    }
 

    //establecer herencia

    class Gato extends Mascota{
        

        public function getNombre(){
            return $this->nombre;
        }
    }

    $gato = new Gato();
    $gato ->nombre = " Firulay";
    echo $gato->saludar();
    echo $gato->getNombre();

?>