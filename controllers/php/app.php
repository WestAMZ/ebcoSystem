<?php
    class App
    {
        static function getHead($title)
        {
            include(HTML_DIR.'head.html');
            echo('<title>');
            echo(SITE_NAME . ' - ' . $title);
            echo('</title></head>');

        }
        static function getModal()
        {
            include(HTML_DIR.'modal.html');
        }
        static function getLeftMain()
        {
            include(HTML_DIR . 'left-main.html');
        }
        static function getRightMain()
        {
            include(HTML_DIR . 'right-main.html');
        }
        static function getNavBar()
        {
            include (HTML_DIR . 'navbar.html');
        }
        static function getEmployee()
        {
            include(HTML_DIR . 'employee.html');
        }
        static function getMenuGG()
        {
            include(HTML_DIR . 'menu-gg.html');

        }
        static function getMenuGS()
        {
            include(HTML_DIR . 'menu-gs.html');
        }
        static function getMenuE()
        {
            include(HTML_DIR . 'menu-e.html');
        }
    }
?>
