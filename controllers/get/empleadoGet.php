<?php
    include_once(MODELS_DIR .'empleado.php');
    header('Content-type: application/json');
    if($_GET)
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $empleado = Empleado::getEmpleadoById($id);
            echo ('{ "empleado" : [' );
            echo(JSON_encode($empleado));
            echo (']}' );
        }
    }
?>
