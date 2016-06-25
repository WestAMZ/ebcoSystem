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
        static function uploadfile()
        {

        }

    }

?>
