

<?php
    //archivo
    //define(FILE, "datos.txt");
    //'datos.txt'

    //funcion para listar datos
    function getData(){
        //si el archivo no existe lo creamos 
        if (!file_exists('datos.txt')) {
            file_put_contents('datos.txt', '');
        }
        //obtener los datos del archivo
        $data = file_get_contents('datos.txt');
        $data = json_decode($data, true);

        //si los datos no son array, lo inicializamos
        if (!is_array($data)) {
            $data=array();
        }
        return $data;

    }

    //funcion para guardar datos
    function saveData($name, $lastname, $age){
        //obtenemos los datos actuales del archivo
        $data = getData();

        //crear nuevo registro
        $record = array(
            "name" => $name,
            "lastname" => $lastname,
            "age" => $age
        );
        //agregar el nuevo registro al array de datos
        $data[] = $record;

        //convertir el array a formato json y lo guardamos 
        $data = json_encode($data);
        file_put_contents('datos.txt', $data);

    }

    //funcion para modificar registro
    function updateData($cod, $name, $lastname, $age){
        //obtenemos los datos actuales del archivo
        $data = getData();

        //actualizamos el registro correspondiente
        $data[$cod]['name'] = $name;
        $data[$cod]['lastname'] = $lastname;
        $data[$cod]['age'] = $age;

        //convertir a formato jason
        $data = json_encode($data);
        file_put_contents('datos.txt', $data);

    }

    //funcion para eliminar
    function deleteData($cod){
        //obtener los datos
        $data = getData();

        //eliminar registro
        unset($data[$cod]);
        
        //reindexar el array
        $data = array_values($data);

        //convertimos el array a formato JSON y guardar archivo
        $data = json_encode($data);
        file_put_contents('datos.txt', $data);
    }

?>