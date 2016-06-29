<?php
    include_once(MODELS_DIR . 'empleado.php');
    $empleados = Empleado::getEmpleados();
    foreach( $empleados as &$empleado)
    {
?>
        <tr class="empleado">
            <td><?php echo($empleado->getId_Empleado())?></td>
            <td><?php echo($empleado->getCedula())?></td>
            <td><?php echo($empleado->getFullName())?></td>
            <td><?php echo($empleado->getCedula())?></td>
            <td><?php echo($empleado->getTelefono())?></td>
            <td><?php echo($empleado->getFecha_Ingreso())?></td>
        </tr>
<?php
    }
?>
