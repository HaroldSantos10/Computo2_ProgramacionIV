<?php

    //interfaz identifiación
    interface Iidentificacion{
        public function idenficarte();
    }

    /*clases abstractas que implementarán la interfaz Iidentificación, no serán
    instanciadas pero serviran como modelos para heradar a otras clases hijas
    que si podrán ser instanciadas.
    */

    abstract class Persona implements Iidentificacion{
        //propiedades de la clase abstracta
        protected $DNI;
        protected $name;
        protected $papel;

        //definición del constructor dentro de la clase abstracta
        //buena práctica para precargar los datos que posteriormente serán
        //necesarios dentro de la clase que hereda
        public function __construct($_DNI, $_name, $_papel){
            $this->DNI = $_DNI;
            $this->name = $_name;
            $this->papel = $_papel;
        }
        
        //método abstracto de la clase Persona
        abstract function saludar();
            
        
        //implementación del método identificarte, de la interfaz Iidentificarte
        function idenficarte(){
            echo "<hr/>"."Me identifico como: ". $this->name. "<br/><hr/>";
        }

    }


    abstract class Vehiculo implements Iidentificacion{
        //propiedades de la clase abstracta
        protected $matricula;
        protected $marca;
        protected $modelo;

        
        
        public function __construct($_matricula, $_marca, $_modelo){
            $this->matricula = $_matricula;
            $this->marca = $_marca;
            $this->modelo = $_modelo;
        }
        
        
        //implementación del método identificarte, de la interfaz Iidentificarte
        function idenficarte(){

            echo "Modelo: moto ". $this->modelo. "<br/>".
            "Marca: ". $this->marca. "<br/>".
            "Matricula: ". $this->matricula. "<br/>";
            

        }

        //método abstracto de la clase Vehiculo
        abstract function arrancar();
 
    }

    //clases que heredan de la clase abstracta Persona

    class Propietario extends Persona{
        
        protected $direccion;

        public function __construct($_DNI, $_name, $_papel, $_direccion){
            parent::__construct($_DNI, $_name, $_papel);
            $this->direccion = $_direccion;

        }
        //implementación del método saludar definido en la clase abstracta
        public function saludar(){

            echo "Hola mi nombre es: ". $this->name. "<br/>".
            "Mi DNI es: ". $this->DNI. "<br/>".
            "Mi papel es: ". $this->papel. "<br/>".
            "Mi dirección es: ". $this->direccion. "<br/>";
        }

        //metodo propio de la clase Propietario

        public function contratar(){
            echo "Estas contratado, un gusto tenerte cont nosotros. <br/>";
        }
    }


    class Cliente extends Persona{
        
        protected $telefono;
        protected $vehiculos;

        public function __construct($_DNI, $_name, $_papel, $_telefono, $_vehiculos){
            parent::__construct($_DNI, $_name, $_papel);
            $this->telefono = $_telefono;
            $this->vehiculos = $_vehiculos;

        }
        //implementación del método saludar definido en la clase abstracta
        public function saludar(){

            echo "Hola mi nombre es: ". $this->name. "<br/>".
            "Mi DNI es: ". $this->DNI. "<br/>".
            "Mi papel es: ". $this->papel. "<br/>".
            "Mi telefono es: ". $this->telefono. "<br/>".
            "Vehículos: ". implode(" - ",$this->vehiculos). "<br/>";
        }
        public function comprar(){
            echo "Me gustaría comprar este producto. <br/>";
        }

    }

    //CLASES QUE HEREDAN DE LA CLASE ABSTRACTA VEHICULO 
    class Coche extends Vehiculo
    {
        protected $anchura;
        protected $altura;

        public function __construct($_matricula, $_marca, $_modelo, $_anchura, $_altura){
            parent::__construct($_matricula, $_marca, $_modelo);
            $this->anchura = $_anchura;
            $this->altura = $_altura;
        }
        //implementación del método arrancar() definido en la clase abstracta
        public function arrancar(){
            echo "<hr/>"."El coche ha arrancado ". "--Tatatachán--". "<br/>".
            "Sus dimensiones son, anchura: ". $this->anchura."mts ".
            ", altura: ". $this->altura. "mts "."<br/>";
        }

        //método propio de la clase Coche
        public function detenerse(){
            echo "El coche se ha detenido <br/>"."<hr/>";
        }
    }

    class Moto extends Vehiculo{
        protected $limitador;

        public function __construct($_matricula, $_marca, $_modelo, $_limitador){
            parent::__construct($_matricula, $_marca, $_modelo);
            $this->limitador = $_limitador;
        }
         //implementación del método arrancar() definida en la clase abstracta
        public function arrancar(){
            echo "<hr/>". "La moto ha arrancado ". "--¡brrrum, brrrum!--". "<br/>".
            "Su limitador de velocidad es de : ". $this->limitador. "KM/H". "<hr/>";
        }

        //método propio de la clase Moto
        public function acelerar(){
            echo "La moto acelera de 0 a 100kms en 0.5 segundos";
        }

    }


    //instanciación de las clases 
    $direccion = "San Miguel, El Salvador";

    $propietario = new Propietario("00000010", "Harold Santos", "Propietario", $direccion);
    $propietario->idenficarte(); //método definido en la interfaz
    $propietario->saludar();//método definido en la clase abstracta
    $propietario->contratar();

    $telefono = "78603129";
    $vehiculos = array("Toyota RTX", "Honda RTX", "Nissan RTX");

    $cliente = new Cliente("00000011", "Pedro Sanchez", "Cliente", $telefono, $vehiculos);
    $cliente->idenficarte();
    $cliente->saludar();
    $cliente->comprar();

    echo "<hr/>" . "<br/>";

    $coche = new Coche("0000001", "Nissan", "Nissan GTRX", 2, 1);

    $coche->idenficarte();
    $coche->arrancar();
    $coche->detenerse();

    $moto = new Moto("0000002", "Yamaha", "Sport GT", 80.5);
    $moto-> idenficarte();
    $moto-> arrancar();
    $moto-> acelerar();


?>