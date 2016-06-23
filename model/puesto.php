<?php

    class Puesto
    {
        var $id_puesto;
        var $nombre;
        var $descripcion;

        /*
            COnstructor por defecto
        */

        function __construct($id_puesto,$nombre,$descripcion)
        {
            $this->id_puesto = $id_puesto;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
        }

        /*
            setters de la clase
        */

        function setId_Puesto($id_puesto)
        {
            $this->id_puesto = $id_puesto;
        }
        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        /*
            getters de la clase
        */

        function getId_Puesto()
        {
            return $this->id_puesto;
        }
        function getNombre()
        {
            return $this->nombre;
        }
        function getDescripcion()
        {
            return $this->descripcion;
        }

    }

?>
