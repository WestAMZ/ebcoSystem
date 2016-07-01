<?php

    include(MODELS_DIR . 'empleado.php');
    if($_POST)
    {
        //$id_empleado,$nombre1,$nombre2,$apellido1,$apellido2,$cedula,$telefono,$firma,$id_puesto,$id_sitio,$id_jefe,$inss,$fecha_ingreso,$estado
        if(!isset($_GET['mod']))
        {
            $empleado = new Empleado (null,$_POST['nombre1'],$_POST['nombre2'],$_POST['apellido1'],$_POST['apellido2'],$_POST['cedula'],$_POST['telefono'],$_POST['firma'],$_POST['id_puesto'],$_POST['id_sitio'],$_POST['id_jefe'],$_POST['inss'],null,1);

            if($empleado->saveEmpleado())
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
            $id_mod = $_GET['id'];
            $empleado = new Empleado ($id_mod,$_POST['nombre1'],$_POST['nombre2'],$_POST['apellido1'],$_POST['apellido2'],$_POST['cedula'],$_POST['telefono'],$_POST['firma'],$_POST['id_puesto'],$_POST['id_sitio'],$_POST['id_jefe'],$_POST['inss'],null,1);
            $empleado->update();
        }
    }
?>
