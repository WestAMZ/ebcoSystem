<?php
    include_once(MODELS_DIR .'empleado.php');
    header('Content-type: application/json');
    if($_GET)
    {
        if(isset($_GET['id']))
        {
            $id = Connection::filterInput($_GET['id']);
            Connection::connect();
            $query = "SELECT `id_empleado`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `cedula`, `telefono`, `firma`, `id_puesto`, `id_sitio`, `id_jefe`, `inss`, `fecha_ingreso`, `estado` FROM `empleado` WHERE id_empleado = '$id' ";
            $result = Connection::getConnection()->query($query);
            $empleado = $result ->fetch_assoc();
            echo ('{ "empleado" : [' );
            echo(JSON_encode($empleado));
            echo (']}' );
            Connection::close();
        }
    }
?>
