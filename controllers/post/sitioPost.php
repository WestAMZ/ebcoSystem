<?php

    include(MODELS_DIR . 'sitio.php');
    if($_POST)
    {
        //$idSitio, $nombre, $pais, $ciudad, $direccion, $telefono, $latitud, $longitud, $estado
        $sitio = new
         Sitio(null,$_POST['nombre'],$_POST['pais'],$_POST['ciudad'],$_POST['direccion'],$_POST['telefono'],$_POST['latitud'],$_POST['longitud'],1);

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
