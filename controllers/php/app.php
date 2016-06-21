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
    }
?>
