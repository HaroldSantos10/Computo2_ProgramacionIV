<?php

//creación de variables 

    $cantidad = 5;
    $precio = 3;

    $importe = $cantidad*$precio;

    //interpretación de variables dentro de comillas 

    $comillasDobles ="Texto entre comillas dobles, puede contener 'comillas
    simples' dentro sin problemas";

    $comillasSimples = 'Texto entre comillas simples, puede contener "comillas
    dobles" pero sin variables dentro, porque usa comillas simples para delimitar
    el inicio y fin del bloque';

    $nombre = 'Juan';
    $apellido = 'Perez';
    $escapeDoble = "Texto con \"comillas\" dobles escapadas";
    $espapeSencillo = "Texto con \'comillas\' simples escapadas";
    $variablesDobles = "Texto con variables como $nombre y $apellido
    intercaladas entre comillas dobles, que se reemplazarán por su valor";


    //concatenación en PHP

    $nombre = 'Pepe';
    $concatenacion = '<p id="saludo">Hola '. $nombre.'</p>';

    $nombre = 'Juan';
    $apellido = 'Perez';
    $concatenacion = '<p>Su nombre y apellido es '.$nombre.$apellido.'</p>';

    //constantes en PHP

    define ("PI", 3.1415926);
    define ("BR", "<br />");
    define ("LIBRO", "PHP 6");
    print(PI);
    print(BR);

    //tambien se puede definir constantes usando la palabra reservada const

    const E = 2.71828;
    var_dump(E);
    var_dump(PI);


    //Condicional IF

    if ($_POST["password"]=="superagente86"){
        echo "<h1>Bienvenidol</h1>";
    }
    
    //ELSEIF
    if ($clima == "lluvia") {
        echo "Llevar paraguas";
    } else {
    echo "No llevar paraguas";
    }
    

    //SWITCH

    
    switch ($día){
        case "lunes":
        $texto = "¡Feliz día Lunes!";
        break;
        case "martes":
        $texto = "¡Feliz día Martes!";
        break;
        case "miercoles":
        $texto = "¡Feliz día Miercoles!";
        break;
        case "jueves":
        $texto = "¡Feliz día Jueves!";
        break;
        case "viernes":
        $texto = "¡Feliz día Viernes!";
        break;
        case "sabado":
        $texto = "¡Feliz día Sabado!";
        break;
        case "Domingo":
        $texto = "¡Feliz día Domingo!";
        break;
        default: 
            $texto = "¡No es un día de la semana!";
        }
    print ($texto);
   
    




?>