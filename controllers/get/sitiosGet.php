<?php
    include( MODELS_DIR . 'sitio.php');
    $sitios = Sitio::getSitios();
    foreach ($sitios as &$sitio)
    {
?>
    <tr class="sitio">
        <td><?php echo($sitio->getIdSitio())?></td>
        <td><?php echo($sitio->getName())?></td>
        <td><?php echo($sitio->getCity())?></td>
        <td><?php echo($sitio->getCountry())?></td>
    </tr>
<?php
    }
?>
