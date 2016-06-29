<?php

    include(MODELS_DIR . 'insidencia.php');

    if($_POST)
    {
            $insidencia = new Insidencia(null,null,$_POST['descripcion'],0,1,$_SESSION['id_usuario'],$_POST['fileToUpload']);
            if($insidencia->saveInsidencia())
            {
                echo ('1');
            }
            else
            {
                echo ($insidencia->add_error());
            }


    }
?>
