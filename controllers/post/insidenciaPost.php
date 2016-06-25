<?php

    include(MODELS_DIR . 'insidencia.php');
    if($_POST)
    {
       $insidencia = new Insidencia();

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
