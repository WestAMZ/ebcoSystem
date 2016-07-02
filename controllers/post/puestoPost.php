<?php

    include(MODELS_DIR . 'puesto.php');
    if($_POST)
    {
        //$id_puesto, nombre, descripcion
        if(!isset($_GET['mod']))
        {   //$_POST['firma']
            $puesto = new Puest();                                                         (null,$_POST['nombre'],$_POST['descripcion']);

            if($empleado->saveEmpleado($_POST['correo'],$_POST['id_role'],null))
            {
                echo('1');
            }
            else
            {

                echo ($empleado->add_error);
            }
        }
        //mode 1 : update
        else if($_GET['mod']==1)
        {
            //firma esta en null
            $id_mod = $_GET['id'];
            $empleado = new Empleado ($id_mod,$_POST['nombre1'],$_POST['nombre2'],$_POST['apellido1'],$_POST['apellido2'],$_POST['cedula'],$_POST['telefono'],null,$_POST['id_puesto'],$_POST['id_sitio'],$_POST['id_jefe'],$_POST['inss'],null,1);
            $empleado->update();
            echo(1);
        }
    }
?>
