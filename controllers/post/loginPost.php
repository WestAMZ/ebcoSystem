<?php
    if($_POST)
    {
        if( isset($_POST['correo']) and isset($_POST['password']))
        {
            $correo = Connection::filterInput($_POST['correo']);
            $password = Connection::filterInput($_POST['password']);
            echo('antes de input : '.$correo.' '.$password);
            Connection::login($correo,$password);
        }
    }
?>
