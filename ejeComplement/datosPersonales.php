<?php

    $nombreCompleto = "Harold Enoc Santos Morillo";
    $lugarNac = "San Miguel, San Miguel El Salvador";
    $edad = 21;
    $codigoEstudiante = "SMIS001621";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Datos Personales</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-auto bg-secondary p-5 text-center"  >
        
        <b><label for="" class="form-label fs-2">Tabla de Datos Personales</label></b>
        <table class="table table-striped" >
            
            <thead>
                <tr>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Lugar de Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Código de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?php echo $nombreCompleto ?></td>
                <td><?php echo $lugarNac ?></td>
                <td><?php echo $edad ?></td>
                <td><?php echo $codigoEstudiante?></td>
                </tr>
                <tr>

            </tbody>
        </table>

    </div>

</body>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>