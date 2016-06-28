<?php
class Comentario
{
    var $id_comentario;
    var $fecha;
    var $contenido;
    var $usuario;
    var $id_incidencia;

    function __contruct($id_comentario, $fecha, $contenido, $usuario, $id_incidencia)
    {
        $this->id_comentario = $id_comentario;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
        $this->usuario = $usuario;
        $this->id_incidencia = $id_incidencia;
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
    function setId_Incidencia($id_incidencia)
    {
        $this->id_incidencia = $id_incidencia;
    }
    function getId_Incidencia()
    {
        return $this->id_incidencia;
    }
    static function getTotalComment($idinsidencia)
    {
            Connection::connect();
            $query = "SELECT COUNT(id_comentario) as cantidad FROM `comentario` WHERE id_insidencias = '$idinsidencia'";
            $result = Connection::getConnection()->query($query);
            $row=$result->fetch_assoc();
            $cantidad = $row['cantidad'];
            Connection::close();
            return $cantidad;
    }
    static function getComentarios($idinsidencia)
    {
        Connection::connect();
        $query = "SELECT `id_comentario` AS id_comentario,`fecha` as fecha,`contenido` as contenido,`id_insidencias` as id_insidencia,`id_usuario` as id_usuario FROM `comentario` WHERE `id_insidencias` = '$idinsidencia'";
        $result = Connection::getConnection()->query($query);
        $comentarios = array();
        while($row = $result->fetch_assoc())
        {
            $comentario = new Comentario($row['id_comentario'],$row['fecha'],$row['contenido'],$row['id_usuario'],$row['id_insidencia']);
            array_push($comentarios,$comentario);

        }
        Connection::close();
        return $comentarios;
    }
}
?>
