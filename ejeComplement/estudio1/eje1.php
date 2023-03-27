<?php

    $nombre = 'Harold'; 
    $apellido = 'Santos';

    $concatenacion = '<p id="saludo"> <b>Hello '. $nombre." ".$apellido. '</p>'; 

    echo $concatenacion;



    //Para declarar constantes en PHP se usael método define();

    // La estructura de define es: 
    /* define("NOMBRE_CONSTANTE", valor de cualquier tipo de dato ); */


    define ("PI", 3.1415926);
    define ("BR", "<br />");
    define ("LIBRO", "PHP 6");
    print(PI);
    print(BR);
    

    $imprimir_constante = 
    '<p id="imp"> 
        <b>Pi= '. PI. 
        "<br>".
        '<br>'.
        '<b>Libro= '. LIBRO. 
        "<br>".
    
    '</p>'; 


    define("VALOR", $imprimir_constante);


    echo($imprimir_constante);

    print($imprimir_constante);

    printf($imprimir_constante);
    
    print_r($imprimir_constante);

    echo("Espacio de impresión");

    var_dump($imprimir_constante);

    print("Esto es una prueba");
    echo(VALOR);
    

?>