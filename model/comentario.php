<?php
class Comentario
{
    var $id_comentario;
    var $fecha;
    var $contenido;
    var $usuario;
    var $incidencias

    function __contruct($id_comentario, $fecha, $contenido, $usuario, $incidencias)
    {
        $this->id_comentario = $id_comentario;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
        $this->usuario = $usuario;
        $this->incidencias = $incidencias
    }

    function setIdComentario($id_comentario)
    {
    $this->id_comentario = $id_comentario;
    }
    function getIdComentario()
    {
    return $this->id_comentario;
    }
    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    function getFecha()
    {
        return $this->fecha;
    }
    function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }
    function getContenido()
    {
        return $this->contenido;
    }
    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    function getUsuario()
    {
        return $this->usuario;
    }
    function setIncidencias($incidencias)
    {
        $this->incidencias = $incidencias;
    }
    function getIncidencias()
    {
        return $this->incidencias;
    }
}
?>
