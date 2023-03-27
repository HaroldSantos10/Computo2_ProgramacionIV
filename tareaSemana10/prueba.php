<?php
// Definición de la interfaz
interface Saludo {
    public function saludar();
}

// Definición de la clase abstracta
abstract class Persona implements Saludo {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    abstract public function presentarse();
    
    public function saludar() {
        echo "Hola, soy " . $this->nombre . "\n";
    }
}

// Definición de la clase normal que hereda de la clase abstracta
class Estudiante extends Persona {
    private $carrera;
    
    public function __construct($nombre, $carrera) {
        parent::__construct($nombre);
        $this->carrera = $carrera;
    }
    
    public function presentarse() {
        echo "Soy estudiante de " . $this->carrera . "\n";
    }
}

// Creación de un objeto de la clase Estudiante
$estudiante = new Estudiante("Juan", "Ingeniería");

// Llamada al método presentarse()
$estudiante->presentarse();

// Llamada al método saludar()
$estudiante->saludar();
?>