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
        <span class="title green-text left"> <?php echo(Usuario::getNameUser($comentario->getUsuario()) . ' (' . $comentario->getFecha() . ')')?> </span>
        <br>
        <p class="left-align">
            <?php echo($comentario->getContenido()) ?>
        </p>
        <?php  if($comentario->getUsuario() == $_SESSION['id_usuario'])
        {
        ?>
            <a href="#!" class="secondary-content"><i class="material-icons">edit</i></a>

        <?php
        }
        ?>

        <input type="hidden" value="<?php echo($comentario->getIdComentario()) ?>" name="id_comentario">
    </li>

    <?php

    }

?>
