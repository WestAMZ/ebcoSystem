<?php
    require('controllers/core.php');
    Connection::initSession();
    //Verficamos existencia de la variable view
    if(isset($_GET['view']))
    {
        if(file_exists(PHP_DIR . strtolower($_GET['view']) . 'Controller.php'))
        {
            include(PHP_DIR . strtolower($_GET['view']) . 'Controller.php');
        }
        else
        {
            include(PHP_DIR . 'indexController.php');
        }
    }
    //Verficamos existencia de la variable post
    else if(isset($_GET['post']))
    {
        if(file_exists(POST_DIR . strtolower($_GET['post']) . 'Post.php'))
        {
            include(POST_DIR . strtolower($_GET['post']) . 'Post.php');
        }
        else
        {
            include(PHP_DIR . 'indexController.php');
        }
    }
    //Verficamos existencia de la variable get
    else if(isset($_GET['get']))
    {
        if(file_exists(GET_DIR . strtolower($_GET['get']) . 'Get.php'))
        {
            include(GET_DIR . strtolower($_GET['get']) . 'Get.php');
        }
        else
        {
            include(PHP_DIR . 'indexController.php');
        }
    }
    //en este punto verificamos que no existe ni una de las tres variables anteriores
    else if ( !isset($_GET['view']) && !isset($_GET['post']) && !isset($_GET['get']) )
    {
        include(PHP_DIR . 'indexController.php');
    }
    //echo "Today is " . date("Y/m/d h:i:sa ") . "<br>";
?>
