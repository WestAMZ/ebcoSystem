<?php
    App::getHead('Employees');
?>

    <div id="main-container" class="container-fluid row full">

<?php
    App::getLeftMain();
    App::getRightMain();
    App::getEmployee();
    App::getModal();
    include(HTML_DIR.'modalpuesto.html');
?>
