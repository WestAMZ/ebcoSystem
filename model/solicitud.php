<?php
class Solicitud
{
    var $id_solicitud;
    var $fecha_solicitud;
    var $observaciones;
    var $estado;
    var $id_empleado;
    var $fase;
    var $id_tipo_solicitud;
    var $id_gerente;
    var $fecha_aprovacion;

    function __contruct($id_solicitud, $fecha_solicitud, $observaciones, $estado, $id_empleado, $fase, $id_tipo_solicitud, $id_gerente, $fecha_aprovacion)
    {
        $this->id_solicitud = $id_solicitud;
        $this->fecha_solicitud = $fecha_solicitud;
        $this->observaciones = $observaciones;
        $this->estado = $estado;
        $this->id_empleado = $id_empleado;
        $this->fase = $fase;
        $this->id_tipo_solicitud = $id_tipo_solicitud;
        $this->id_gerente = $id_gerente;
        $this->fecha_aprovacion = $fecha_aprovacion;
    }
    function setIdSolicitud($id_solicitud)
    {
        $this->id_solicitud = $id_solicitud;
    }
    function getIdSolicitud()
    {
        return $this->id_solicitud;
    }
    function setFechaSolicitud($fecha_solicitud)
    {
        $this->fecha_solicitud = $fecha_solicitud;
    }
    function getFechaSolicitud()
    {
        return $this->fecha_solicitud;
    }
    function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }
    function getObservaciones()
    {
        return $this->observaciones;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }
    function getEstado()
    {
        return $this->estado;
    }
    function setIdEmpleado($id_empleado)
    {
        $this->id_empleado = $id_empleado;
    }
    function getIdEmpleado()
    {
        return $this->id_empleado;
    }
    function setFase($fase)
    {
        $this->fase = $fase;
    }
    function getFase()
    {
        return $this->fase;
    }
    function setIdTipoSolicitud($id_tipo_solicitud)
    {
        $this->id_tipo_solicitud = $id_tipo_solicitud;
    }
    function getIdTipoSolicitud()
    {
        return $this->id_tipo_solicitud;
    }
}
?>
