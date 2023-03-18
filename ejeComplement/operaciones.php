<?php

    if(isset($_POST["Enviar"])){

        $num1 = $_POST["num1"];
        $num2 =  $_POST["num2"];
        $operacion = $_POST["operacion"];

        $operaciones = array("Suma", "Resta", "Multiplicacion", "Division");

        if(!in_array($operacion, $operaciones)){
            echo "La operacion no es valida";
            exit();
        }

        switch($operacion){
            case "Suma":
                $resultado = $num1 + $num2;
                break;
            case "Resta": 
                $resultado = $num1 - $num2;
                break;
            case "Multiplicacion": 
                $resultado = $num1 * $num2;
                break;
            case "Division": 

                if($num2 == 0){
                    echo "<script>alert('El segundo valor no puede ser cero.');</script>";
                    exit();
                }

                $resultado = $num1 / $num2;
                break;
        }

        //resultado obtenido
        $resul = "El resultado de la $operacion de $num1 y $num2 es: $resultado";  

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Operaciones</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">
    

    <div class="col-auto bg-secondary p-5 text-center" >

        <form action="operaciones.php" method="POST"> 

            <div class="mb-3 text-white">
                <label for="num1" class="form-label">Número 1</label>
                <input name ="num1" id="num1" type="number" class="form-control text-center" required>
            </div>
            <div class="mb-3 text-white">
                <label for="num2" class="form-label">Número 2</label>
                <input name ="num2" id="num2" type="number" class="form-control text-center" aria-describedby="num2" required>
                <div id="num2" class="form-text text-white">*En caso de división no ingresar un número igual o menor que 0</div>
            </div>
            <select id="operacion" name="operacion" class="form-select bg-dark text-white text-center"  aria-label="Default select example">
                <option selected value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicacion</option>
                <option value="Division">Division</option>
            </select>
            <br>
            <button name="Enviar" value="Procesar" type="submit"  class="btn btn-dark">Realizar</button>
            <br>
            <br>
            <label for="resultado"  class="form-label" value=""><?php 
            if (!empty($resul)){
                echo $resul;
            }else {
                echo "Aquí se mostrará el resultado";
            };
            
            ?></label>
        </form>

    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>