<?php

    include(MODELS_DIR . 'sitio.php')

    if($_POST)
    {
        $sitio = new Sitio(null,$_POST['nombre'],$_POST['pais'],$_POST['ciudad'],$_POST['direccion'],$_POST['telefono'],$_POST['name'],$_POST['latitud'],$_POST['longitud'],null);

        if($sitio->saveSitio())
        {
            echo ('1');
        }
        else
        {
            echo ($sitio->add_error());
        }
    }
?>
