<?php


    //FOR LOOP

    for($i=0; $i<=10; $i++){
        echo "Número actual del ciclo: ". $i. "<br/>";
    }

    //WHILE LOOP
    $x = 15;

    while ($x<25):
        echo "While se repite <br/>"; 
        $x++;//incrementa

    endwhile;


    //DO WHILE LOOP
    $x = 15;

    do{
        echo "While se repite al menos una vez<br/>"; 
        $x++;//incrementa
    }
    while ($x<25);

    //Loop foreach, para recorrer array
    $valores = array(5, 9, 8, "Hola", "Andrea" );
    foreach ($valores as $key ) {
        echo $key. "<br/";
    }

    //Accediendo directamente a los elementos del array
    $nombres = array("Jose", "Sofia", "Andrea", "Alberto");

    //Accediendo directamente al indice
    echo $nombres[0];
    echo $nombres[1];
    echo $nombres[2];
    //recorrerlo con un bucle foreach

    foreach ($nombres as $key ) {
        echo "Nombre: ". $key. "<br/>";
    }

    //recorrerlo con for

    for ($i=0; $i < $nombres; $i++) { 
        echo $nombres[i]. "<br/>";
    }

    //array asociativo 
    $multipleColors = array(
        "Jose"=> array("Azul","Rojo", "Verde"),
        "Sofía"=> array("Violeta", "Rosado")
    );

    echo "<h2> Jose </h2>";
    echo $multipleColors["Jose"][0]. "<br/>";
    echo $multipleColors["Jose"][1]. "<br/>";
    echo $multipleColors["Jose"][2]. "<br/>";

    //correrlo con un foreach
    foreach ($multipleColors as $nombre => $values) {
        
        echo "<h2>$nombre <h2/> <b> le gusta los colores: <br><br/>";

        foreach ($values as $colores) {
            echo $colores . "<br/>";
        }
    }


    //array multidimensional numérico
    $multipleNumerico = array(
        array("Jose", "Andrea", "Carmen"),
        array(22,35,18),
        array("Masculino", "Femenino", "Femenino"),
    );

    echo "Nombre: ". $multipleNumerico[0][0]. "<br/>";
    echo "Edad: ". $multipleNumerico[2][0]. "<br/>";
    echo "Sexo: ". $multipleNumerico[1][0]. "<br/>";

    //recorrerlo usando foreach
    foreach ($multipleNumerico as $key => $value) {
        foreach ($value as $datos) {
            echo $datos. "<br/>";
        }
    }

    //array asociativo

    $asoc = array(
        "Jose" => array(22, "Masculino"),
        "Andrea" => array(35, "Femenino"),
        "Carmen" => array(22, "Femenino"),
    );

    foreach ($asoc as $key => $valus) {
        echo "<b>$key<b><br/>";
        foreach ($values as $key => $datos) {
            echo $datos. "<br/>";
        }
    }


    //Asociativo agregando más claves
    $asoc = array(
        "Jose" => array("edad"=> 22, "sexo"=> "Masculino"),
        "Andrea" => array("edad"=> 35, "sexo"=> "Femenino"),
        "Carmen" => array("edad"=> 22, "sexo"=> "Femenino"),
    );

    foreach ($asoc as $key => $values) {
        echo "<br/><b>$key</b><br/>";
        foreach ($values as $key2 => $datos) {
            
            echo "<b>".$key2 . ": </b>";
            echo $datos . "<br/>";
        }
    }

    //funciones de cadena

    $cadena = "Programación Computacional IV";

    echo strtolower($cadena); //convierte todas a minusculas
    echo strtoupper($cadena); //conviete todas a mayusculas
    echo strlen($cadena); //función de longitud de cadena 
    echo explode($cadena); //convierte la cadena en una variable de matriz
    echo substr($cadena,3,4); //Se usa para devolver parte de la cadena. Acepta tres (3) parámetros básicos.  
    echo str_replace("IV","I",$cadena);//Se usa para localizar y reemplazar valores de cadena especificados en una cadenadada. La función acepta tres argumentos
    echo strpos($cadena, "IV");

    echo sha1($cadena);
    echo md5($cadena);
    echo str_word_count($cadena);
    echo ucfirst($cadena);
    echo lcfirst($cadena);


    //funciones numéricas
    $number = 256148;

    echo is_numeric($number); //comprueba si el parametro introducido es un número
    echo rand(1, 100); //genera un numero aleatorio entre 1 y 100
    echo round($number); //redondea al numero entero mas cercano 
    echo sqrt($number);
    echo cos($number);
    echo sin($number);
    echo tan($number);
    echo pi();


    //funciones fecha y hora

    date(format, [timestamp]);
    echo time();

    $identificadores = DateTimeZone::listIdentifiers();
    foreach ($identificadores as $key => $value) {
        echo $value. "<br/>";
    }


    echo "El tiempo en: ". date_default_timezone_get(). " es " . date("H: i: s"). "<br/>";
    $identificador="Pacific/Wake";
    date_default_timezone_set($identificador);

    echo date_default_timezone_get();

    echo "El tiempo en: ". date_default_timezone_get(). " es " . date("H: i: s"). "<br/>";


    mktime(hour, minute, second, month, day, is_dst);

    echo miktime(0,0,0,10,13,2025);

    //FUNCIONES FECHA
    //parametros de tiempo

    echo date("r"); //devuelve fecha y hora completas
    
    //Devuelve si la hora actual es am o pm, AM o PM respectivamente
    echo date("a")."<br/>"; 
    echo date("A"); 

    //Devuelve la hora sin ceros a la izquierda [1 a 12], [0 a 23] respectivamente
    echo date("g")."<br/>"; 
    echo date("G"); 

    //Devuelve la hora con ceros a la izquierda [01 a 12], [00 a 23] respectivamente
    echo date("h")."<br/>"; 
    echo date("H"); 

    //Devuelve los minutos / segundos con ceros a la izquierda [00 a 59]
    echo date("i")."<br/>"; 
    echo date("s"); 

    //Devuelve el día del mes con ceros a la izquierda [01 a 31]
    echo date("d")."<br/>"; 

    //Devuelve el día del mes sin ceros a la izquierda [1 a 31]
    echo date("j")."<br/>"; 

    //Devuelve las primeras 3 letras del nombre del día [Sun a Sat]
    echo date("D")."<br/>"; 

    //Devuelve el nombre del día de la semana [domingo a sábado]
    echo date("I")."<br/>"; 

    //Devuelve el día de la semana sin ceros a la izquierda [0 a 6] El domingo está representado por cero (0) hasta el sábado representado por seis (6)
    echo date("W")."<br/>"; 
    
    // Devuelve el día del año sin espacios iniciales [de 0 a 365]
    echo date("z")."<br/>"; 

    //PARAMETROS DE MES

    echo date("m");//deuvleve el número del mes con ceros a la izqueirda

    echo date("n");//devuelve el número del mes sin ceros a la izquierda

    echo date("M");//devuleve las primeras 3 letras del nombre del mes [de enero a diciembre]

    echo date("F");// devuelve el nombre del mes [enero a diciembre]

    echo date("t");// devuelve el número de días en un mes [28 a 31]

    //PARAMETROS DE AÑO

    echo date("L");// DEVUELVE 1 si el año es bisiesto y 0 si no es un año bisiesto
    echo date("Y");// devuelve formato de año de cuatro digitos
    echo date("y");// devuelve dos (2) digitos año formato (00 a 99)


    //FUNCIONES DEFINIDAS POR EL USUARIO

    //VALORES PREDETerMINADOS

    function colores($color = "verde"){
        return "<p> Su color favorito es: $color</p>";
    }
    echo colores("Azul");

    echo colores();

    //VALORES POR REFERENCIA 
    //POR VALOR
    function saludo($nombre){
        $nombre .= ", Buenos días";
    }

    $nombre = "Sofia Flores";
    saludo($nombre);
    
    echo $nombre;
    //----
    $fruta = array("manzana", "uva", "pera");

    function frutas($fruta){
        array_push($fruta, "Sandia");
    }

    frutas($fruta);
    var_dump($fruta);

    //POR REFERENCIA
    //el argumeto se pasa por referencia 
    //anteponiendo el simbolo &
    function saludo(&$nombre){
        $nombre .= ", Buenos días";
    }

    $nombre = "Sofia Flores";
    saludo($nombre);
    
    echo $nombre;

//FUNCIONES ANONIMAS

    function(){
        return "Hola";
    };

    $saludo = function(){
        return "Hola";
    };
    echo $saludo();

    //añadiendo una función en otra
    function saludo($saludar){
        echo $saludar();
    }
    //añadiendo la función en otra
    saludo(function(){
        return "Buenos días";
    });

    $color = "Azul";

    $mostrar = function() use($color){
        echo "Su color favorito es $color";
    };
    
    $mostrar();
    echo $color;
    
    //SI SE QUIERE QUE SU VALOR SEE ALTERE SE PASA POR REFERENCIA
    $mostrar = function() use(&$color){
        //echo "Su color favorito es $color";
        echo $color="Verde";
    };
    
    $mostrar();
    echo $color;


    $saludo = function($nombre){
        printf("Hola ".$nombre);
    };

    $saludo("Andrea");
    call_user_func($saludo, "Amigos");

    //DECLARACIONES DE TIPO 

    //especificar el tipo de datos que tendrá el parametro 
    //en este caso se define que recibirá si o si un array
    function saludo (array $nombre){
        echo "Hola" . join(" ", $nombre);
    }
    saludo(["Carmen, Jose"]);

    //DECLARACIONES DE TIPO DE DEVOLUCIÓN
    declare(strict_types = 1);
    function suma($n1, $n2): int{
        return $n1 + $n2;
    }//siempre devolverá un entero

    var_dump(suma(6,7)); 

?>

