<?php

    include(MODELS_DIR . 'comentario.php');
    if($_POST)
    {
       $comentario = new Comentario(null,null,$_POST['comentario'],$_SESSION['id_usuario'],$_POST['Id_Insidencia']);

        if($comentario->saveComentario())
        {
            echo ('1');
        }
        else
        {
            echo ($comentario->add_error());
        }
    }
?>
