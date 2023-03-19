
<?php

    class Mascota{
        //Atributos de la clase 
        private $nombre;
        private $especie;
        private $color;
        private $edad;

        //metodo constructor
        public function __construct($nombre, $especie, $color, $edad)
        {
            $this->nombre = $nombre;
            $this->especie = $especie;
            $this->color = $color;
            $this->edad = $edad;

        }

        //metodos get 
        public function getNombre(){return $this->nombre;}
        public function getespecie(){return $this->especie;}
        public function getColor(){return $this->color;}
        public function getEdad(){return $this->edad;}

        //metodos set
        public function setNombre($nombre){ $this->nombre;}
        public function setespecie($especie){ $this->especie;}
        public function setColor($color){ $this->color;}
        public function setEdad($edad){ $this->edad;}

        //Metodo ruido
        public function ruido(){

            $ruid = "
                <br>
                <br>
                <h3>Descripción de la mascota: $this->nombre</h3>
                <p>
                    Nombre: $this->nombre <br>
                    Especie: $this->especie <br>
                    Color: $this->color <br>
                    Edad: $this->edad <br>
                </p>
            
            ";
            return $ruid;
        }

    }

    class Libro{
        //Atributos de la clase 

        private $titulo;
        private $autor;   
        private $generoLiterario;
        private $cantPaginas;

        //metodo constructor

        public function __construct($titulo, $autor, $generoLiterario, $cantPaginas)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->generoLiterario = $generoLiterario;
            $this->cantPaginas = $cantPaginas;
    
        }

        //metodos get 
        public function getTitulo(){return $this->titulo;}
        public function getAutor(){return $this->autor;}
        public function getGeneroLiterario(){return $this->generoLiterario;}
        public function getCantPaginas(){return $this->cantPaginas;}

        //metodos set
        public function setTitulo($titulo){ $this->titulo;}
        public function setAutor($autor){ $this->autor;}
        public function setGeneroLiterario($generoLiterario){ $this->generoLiterario;}
        public function setCantPaginas($cantPaginas){ $this->cantPaginas;}

        public function sipnosis(){
     
            $sipnosis = "
                <br>
                <br>
                <br>
                <h3>Sipnosis de la Obra: $this->titulo</h3>
                <p>
                    Nombre del Libro: $this->titulo <br>
                    Autor: $this->autor <br>
                    Genero Literio: $this->generoLiterario <br>
                    Cantidad de paginas: $this->cantPaginas <br>

                </p>
            ";
            
            return $sipnosis;
        }
    }

    $mascota = new Mascota("Rocky", "Perro", "Amarillo", 7);
    echo $mascota->ruido();

    $libro = new Libro("La Odisea", "Homero", "Epopeya", 150);
    echo $libro->sipnosis();

?>