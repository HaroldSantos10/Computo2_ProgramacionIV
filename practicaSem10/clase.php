<?php

    //clase abstracta
    abstract class Instrumento{
        public $tipo;


        //metodo abstracto que será sobreescrito en la instancia
        abstract function tocar();

    }

 
    //establecer herencia
    //subclase Guitarra hereda de la clase padre Instrumento
    class Guitarra extends Instrumento{

        public function tocar(){
            return "Soy un instrumento del tipo: ".$this->tipo. " y mi sonido es Twang-Twang Twang". "<br>";
        }
    } 

    $guitarra = new Guitarra();
    $guitarra ->tipo = " Guitarra";
    echo $guitarra->tocar();

    //subclase Saxofon hereda de la clase padre Instrumento
    class Saxofon extends Instrumento{

        public function tocar(){
            return "Soy un instrumento del tipo: ".$this->tipo. " y mi sonido es Ton-Ton Ton". "<br>";
        }
    }

    $saxo = new Saxofon();
    $saxo ->tipo = " Saxofon";
    echo $saxo->tocar();

//subclase Violin hereda de la clase padre Instrumento
    class Violin extends Instrumento{

        public function tocar(){
            return "Soy un instrumento del tipo: ".$this->tipo. " y mi sonido es Glin, clin, glin". "<br>";
        }
    }

    $violin = new Violin();
    $violin ->tipo = " Violin";
    echo $violin->tocar();

?>