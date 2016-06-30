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
        function getPuesto()
        {
            Connection :: connect();
            $query = 'SELECT `id_puesto`,`nombre`,`descripcion` FROM `puesto`';
            $result = Connection::getConnection()->query($query);
            $puestos = array();
            while( $row = $result ->fetch_assoc())
            {
                $puesto = new Puesto($row['id_puesto'],$row['nombre'],$row['descripcion']);
                array_push($puestos,$puesto);
            }
            Connection ::close();
            return $puestos;
        }
        function savePuesto()
        {
            Connection
        }
    }

?>
