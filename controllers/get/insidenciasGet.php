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
                            <img src="<?php echo(PROFILE_DIR . (Usuario :: getUsuarioById($insidencia->getId_Usuario()))->getFoto()) ?>" class="circle responsive-img">
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
                <form class="formcomentario" id="formcomentario" class="card-action row">
                    <div class="col s12 m2 card-action-share left-align">
                        <span class="badge green white-text left-align" style="border-radius:10px"> <?php echo(Comentario :: getTotalComment($insidencia->getId_Insidencia()))?></span>
                        <a class="activator" style="cursor:pointer">Ver Comentarios</a>
                    </div>


                    <div class="input-field col s10 m8">
                        <textarea id="comment" row="2" class="materialize-textarea" name="comentario" required></textarea>
                        <label for="comment">Comentar</label>
                    </div>
                    <div class="col s1 m1" style="margin-top:40px">
                        <button class="btn-floating btn-large waves-effect waves-light red tooltipped" type="submit" data-position="top" data-delay="50" data-tooltip="Enviar comentario"><i class="material-icons">send</i></button>
                    </div>
                    <input type="hidden" name="Id_Insidencia" value="<?php echo($insidencia->getId_Insidencia()) ?>">
                    <div id="result2">
                    </div>
                </form>

                <script>
                    $(".formcomentario").submit(function () {
                        var data = $(this).serialize();
                        result = $('#result2');
                        agregarcomentario('?post=comentario', data, result, $('#myModal'), null);
                        return false;
                    });
                </script>

                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4 left-align">Comentarios<i class="material-icons right">close</i></span>
                    <ul class="collection">
                        <?php
                        $comentarios = Comentario::getComentarios($insidencia->getId_Insidencia());

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
                            </li>

                            <?php

                        }
                    ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php
    }
