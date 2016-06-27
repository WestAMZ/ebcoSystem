<?php
    include(MODELS_DIR . 'insidencia.php');
    include(MODELS_DIR . 'usuario.php');
    include(MODELS_DIR . 'comentario.php');

    $insidencias = Insidencia :: getInsidencias();
    foreach ($insidencias as &$insidencia)
    {
?>

    <div class="row">
        <div class="col s12 m10 offset-m1" style="margin-bottom:50px">
            <div class="card">
                <div class="card-content" style="height:auto;">
                    <div class="row">
                        <div class="col s2">
                            <img src="<?php echo(PROFILE_DIR . ((Usuario :: getUsuarioById($insidencia->getId_Usuario()))->getFoto())) ?>" class="circle responsive-img">
                        </div>
                        <div class="col s10 left-align">
                            <p class="grey-text text-darken-4 margin">
                                <?php echo(Usuario :: getNameUser($insidencia->getId_Usuario())) ?>
                            </p>
                            <span class="grey-text text-darken-1 ultra-small"><?php echo($insidencia->getFecha())?></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col s12">
                            <p class="left-align">
                                <?php echo($insidencia->getDescripcion())?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-action row">
                    <div class="col s12 m2 card-action-share left-align">
                        <span class="badge green white-text left-align" style="border-radius:10px"> <?php echo(Comentario :: getTotalComment($insidencia->getId_Insidencia()))?></span>
                        <a class="activator" style="cursor:pointer">Ver Comentarios</a>
                    </div>
                    <div class="input-field col s10 m8">
                        <textarea id="comment" row="2" class="materialize-textarea"></textarea>
                        <label for="comment">Comentar</label>
                    </div>
                    <div class="col s1 m1" style="margin-top:40px">
                        <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Enviar comentario"><i class="material-icons">send</i></a>
                    </div>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 left-align">Commentarios<i class="material-icons right">close</i></span>
                </div>
            </div>
        </div>
    </div>

    <?php

    }
?>
