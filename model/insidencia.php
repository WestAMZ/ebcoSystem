<?php

    class Insidencia
    {
        var $id_insidencia;
        var $fecha;
        var $descripcion;
        var $nivel;
        var $estado;
        var $id_usuario;
        var $adjunto;

        function __construct($id_insidencia,$fecha,$descripcion,$nivel,$estado,$id_usuario,$adjunto)
        {
            $this->id_insidencia = $id_insidencia;
            $this->fecha = $fecha;
            $this->descripcion = $descripcion;
            $this->nivel = $nivel;
            $this->estado = $estado;
            $this->id_usuario = $id_usuario;
            $this->adjunto = $adjunto;
        }

        /*
            MEtodos setters
        */
        function setId_Insidencia($id_insidencia)
        {
            $this->id_insidencia = $id_insidencia;
        }
        function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }
        function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }
        function setNivel($nivel)
        {
            $this->nivel = $nivel;
        }
        function setEstado($estado)
        {
            $this->estado = $estado;
        }
        function setId_Usuario($id_usuario)
        {
            $this->id_usuario = $id_usuario;
        }
        function setAdjunto($adjunto)
        {
            $this->adjunto = $adjunto;
        }

        /*
            Metodos getters
        */
        function getId_Insidencia()
        {
            return $this->id_insidencia;
        }
        function getFecha()
        {
            return $this->fecha;
        }
        function getDescripcion()
        {
            return $this->descripcion;
        }
        function getNivel()
        {
            return $this->nivel;
        }
        function getEstado()
        {
            return $this->estado;
        }
        function getId_Usuario()
        {
            return $this->id_usuario;
        }
        function getAdjunto()
        {
            return $this->adjunto;
        }

        //$id_insidencia,$fecha,$descripcion,$nivel,$estado,$id_usuario,$adjunto

        function saveInsidencia()
        {
            $added = false;
            try
            {
            Connection :: connect();
            $query = "INSERT INTO `insidencia`(`fecha`,`descripcion`,`nivel`,`estado`,`id_usuario`,`adjunto`) VALUES('CURRENT_DATE','$this->descripcion','$this->nivel','$this->estado','$this->id_usuario','$this->adjunto')";
            $result = Connection :: getConnection() -> query($query);
            $added = true;
            }catch(Exception $e)
            {
                $this->add_error = '<div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    ha ocurrido un error :/ </div>';
            }

            Connection :: close();
            return $added;
        }
        static function getInsidencias()
        {
            Connection :: connect();
            $query = "SELECT `id_insidencia` as id_insidencia,`fecha` as fecha,`descripcion` as descripcion, `nivel` as nivel, i.`estado` as estado, i.`id_usuario` as id_usuario, i.`adjunto` as archivo  FROM `insidencia` i INNER JOIN usuario u on i.`id_usuario` = u.id_usuario INNER JOIN empleado e on u.id_empleado = e.id_empleado";
            $result = Connection::getConnection()->query($query);
            $insidencias = array();
            while($row = $result->fetch_assoc)
            {
                $insidencia = new Insidencia($row['id_insidencia'],$row['fecha'],$row['descripcion'],$row['nivel'],$row['estado'],$row['id_usuario'],$row['archivo']);
                array_push($insidencias,$insidencia);
            }
            Connection ::close();
            return $insidencias;
        }
        static function uploadfile()
        {

        }

    }

?>
