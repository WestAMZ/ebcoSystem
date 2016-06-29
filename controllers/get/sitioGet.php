<?php
    include(MODELS_DIR .'sitio.php');
    if($_GET)
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sitio = SItio::getSitioById($id);
            echo(JSON_encode($sitio));
        }
    }
?>
