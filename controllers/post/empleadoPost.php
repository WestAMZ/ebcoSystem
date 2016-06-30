<?php

    include(MODELS_DIR . 'empleado.php');
    if($_POST)
    {
        //$id_empleado,$nombre1,$nombre2,$apellido1,$apellido2,$cedula,$telefono,$firma,$id_puesto,$id_sitio,$id_jefe,$inss,$fecha_ingreso,$estado
        if(!isset($_GET['mod']))
        {
            $empleado = new Empleado (null,$_POST['nombre1'],$_POST['nombre2'],$_POST['apellido1'],$_POST['apellido2'],$_POST['cedula'],$_POST['cedula'],$_POST['telefono'],null,$_POST['id_puesto'],$_POST['id_sitio'],$_POST['id_jefe'],$_POST['inss'],null,1);

            if($empleado->saveEmpleado())
            {
                //$id_usuario, $correo, $contrasena, $foto, $role, $estado, $id_empleado
                $usuario = new Usuario(null,$_POST['correo'],null,null,$_POST['role'],1,null);

                if($usuario->saveUsuario())
                {

                }
                else
                {
                    echo($usuario->add_error());
                }
            }
            else
            {
                echo ($empleado->add_error());
            }
        }
        //mode 1 : update
        else if($_GET['mod']==1)
        {
            $sitio = new Sitio($_POST['id_insidencia'],$_POST['nombre'],$_POST['pais'],$_POST['ciudad'],$_POST['direccion'],$_POST['telefono'],null,null,1);
            $sitio->updateSitio();
            echo ('1');
        }
    }
?>
