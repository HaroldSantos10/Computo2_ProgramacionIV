<?php

    $datos = array(
        array(
            "nombre" => "Francisco García",
            "telefono" => "5689741523",
            "correo" => "fgarcia@gmail.com"
        ),
        array(
            "nombre" => "Manuel Salinaas",
            "telefono" => "2584369721",
            "correo" => "msalianas@gmail.com"
        ),
        array(
            "nombre" => "Johana Melara",
            "telefono" => "9875147536",
            "correo" => "jmelara@gmail.com"
        ),
    );

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
        
        <b><label for="" class="form-label fs-2">Tabla de Información</label></b>
        <table class="table table-striped" >
            
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $dato => $value) { ?>
                    <tr>
                    <td><?php echo $value['nombre']; ?></td>
                    <td><?php echo $value['telefono']; ?></td>
                    <td><?php echo $value['correo']; ?></td>
                    </tr>
                    <tr>                    

                <?php }?>


            </tbody>
        </table>

    </div>

</body>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>