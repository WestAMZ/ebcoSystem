<?php

include_once(MODELS_DIR . 'insidencia.php');
include_once(MODELS_DIR . 'usuario.php');
include_once(MODELS_DIR . 'comentario.php');
$id_insidencia =  (isset($insidencia) )? $insidencia->getId_Insidencia() : $_GET['id'];
$comentarios = Comentario::getComentarios($id_insidencia);

foreach ($comentarios as &$comentario)
    {

?>
    <li class="collection-item avatar">
        <img src="<?php echo(PROFILE_DIR . (Usuario::getUsuarioById($comentario->getUsuario()))->getFoto())?>" alt="" class="circle responsive-img">
        <span class="title green-text left"> <?php echo(Usuario::getNameUser($comentario->getUsuario()))?> </span>
        <br>
        <p class="left-align">
            <?php echo($comentario->getContenido()) ?>
        </p>
        <a class="secondary-content"><?php echo($comentario->getFecha()) ?></a>
    </li>

    <?php

    }

?>
