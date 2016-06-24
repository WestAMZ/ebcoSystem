<?php

    class Empleado
    {
        var $id_empleado;
        var $nombre1;
        var $nombre2;
        var $apellido1;
        var $apellido2;
        var $cedula;
        var $telefono;
        var $firma;
        var $id_puesto;
        var $id_sitio;
        var $id_jefe;
        var $inss;
        var $fecha_ingreso;
        var $fecha_retiro;
        var $estado;

        /*
        constructor por defecto
        */
        function __construct($id_empleado,$nombre1,$nombre2,$apellido1,$apellido2,$cedula,$telefono,$firma,$id_puesto,$id_sitio,$id_jefe,$inss,$fecha_ingreso,$estado)
        {
            //quité la fecha de retiro
            $this->id_empleado = $id_empleado;
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->cedula = $cedula;
            $this->telefono = $telefono;
            $this->firma = $firma;
            $this->id_puesto = $id_puesto;
            $this->id_sitio = $id_sitio;
            $this->id_jefe = $id_jefe;
            $this->inss = $inss;
            $this->fecha_ingreso = $fecha_ingreso;
            //$this->fecha_retiro = $fecha_retiro;
            $this->estado = $estado;
        }


        /*
         Metodos setters
        */

        function setId_Empleado($id_empleado)
        {
            $this->id_empleado = $id_empleado;
        }
        function setNombre1($nombre1)
        {
            $this->nombre1 = $nombre1;
        }
        function setNombre2($nombre2)
        {
            $this->nombre2 = $nombre2;
        }
        function setApellido1($apellido1)
        {
            $this->apellido1 = $apellido1;
        }
        function setApellido2($apellido2)
        {
            $this->apellido2 = $apellido2;
        }
        function setCedula($cedula)
        {
            $this->cedula = $cedula;
        }
        function setTelefono($telefono)
        {
            $this->telefono = $telefono;
        }
        function setFirma($firma)
        {
            $this->firma = $firma;
        }
        function setId_Puesto($id_puesto)
        {
            $this->id_puesto = $id_puesto;
        }
        function setId_Sitio($id_sitio)
        {
            $this->id_sitio = $id_sitio;
        }
        function setId_Jefe($id_jefe)
        {
            $this->id_jefe = $id_jefe;
        }
        function setInss($inss)
        {
            $this->inss = $inss;
        }
        function setFecha_Ingreso($fecha_ingreso)
        {
            $this->fecha_ingreso = $fecha_ingreso;
        }
        function setFecha_Retiro($fecha_retiro)
        {
            $this->fecha_retiro = $fecha_retiro;
        }
        function setEstado($estado)
        {
            $this->estado = $estado;
        }

        /*
            Metodos getters
        */

        function getId_Empleado()
        {
            return $this->id_empleado;
        }
        function getNombre1()
        {
            return $this->nombre1;
        }
        function getNombre2()
        {
            return $this->nombre2;
        }
        function getApellido1()
        {
            return $this->apellido1;
        }
        function getApellido2()
        {
            return $this->apellido2;
        }
        function getCedula()
        {
            return $this->cedula;
        }
        function getTelefono()
        {
            return $this->telefono;
        }
        function getFirma()
        {
            return $this->firma;
        }
        function getId_Puesto()
        {
            return $this->id_puesto;
        }
        function getId_Sitio()
        {
            return $this->id_sitio;
        }
        function getId_Jefe()
        {
            return $this->id_jefe;
        }
        function getInss()
        {
            return $this->inss;
        }
        function getFecha_Ingreso()
        {
            return $this->fecha_ingreso;
        }
        function getFecha_Retiro()
        {
            return $this->fecha_retiro;
        }
        function getEstado()
        {
            return $this->estado;
        }
<<<<<<< HEAD
        $id_empleado,$nombre1,$nombre2,$apellido1,$apellido2,$cedula,$telefono,$firma,$id_puesto,$id_sitio,$id_jefe,$inss,$fecha_ingreso,$fecha_retiro,$estado
        static function getEmpleados()
        {
             Connection :: connect();
             $query = "SELECT e.id_empleado as id_empleado, e.cedula as cedula, e.nombre1 as nombre1, e.nombre2 as nombre2, e.apellido1 as apellido1, e.apellido2 as apellido2, e.telefono as telefono, e.id_puesto as id_puesto, e.id_sitio as id_sitio, e.id_jefe as id_jefe, e.inss as inss, e.fecha_ingreso as fecha_Ingreso, e.estado as estado FROM empleado e";
             $result = Connection::getConnection()->query($query);
             $empleados = array();
             while( $row =$ result ->fetch_assoc())
             {
                $empleado = new Empleado($row['id_empleado'],$row['nombre1'],$row['nombre2'],$row['apellido1'],$row['apellido2'],$row['telefono'],$row['id_puesto'],$row['id_sitio'],$row['id_jefe'],$row['inss'],$row['fecha_Ingreso'],$row['estado']);
                array_push($empleados,$empleado);
             }
            Connection ::close();
        }
    }
    static function saveEmpleado()
    {
        $added = false;
        Connection :: connect();
        $returned = Connection :: getConnection() -> query("SELECT cedula as cedula FROM empleado LIMIT 1");
        if(!($returned->num_rows >0))
        {
                $query = "INSERT INTO empleado(`id_empleado`,`nombre1`,`nombre2`,`apellido1`,`apellido2`,`cedula`,`telefono`,`firma`,`id_puesto``id_sitio`,`id_jefe`,`inss`,`fecha_ingreso`,`estado`) VALUES('$this->id_empleado','$this->nombre1','$this->nombre2','$this->apellido1','$this->apellido2','$this->cedula','$this->telefono','$this->firma','$this->id_puesto','$this->id_sitio','$this->id_jefe','$this->inss','$this->fecha_ingreso','$this->estado')";
                $result = Connection :: getConnection() -> query($query);
                $added = true;
        }
        else
        {
            $obj = $returned->fetch_assoc();
                if(strtolower($obj['cedula']) == strtolower($this->cedula))
                {
                    $this->add_error = '<div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Ya existe un usuario registrado con este numero de cedula !! </div>';
                }
        function getFullName()
        {
            $full_name = $this->getNombre1() . ' '. $this->getApellido1();
            return $full_name;
        }
        static function getEmpleadoById($id)
        {
            Connection::connect();
            $query = "SELECT `id_empleado`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `cedula`, `telefono`, `firma`, `id_puesto`, `id_sitio`, `id_jefe`, `inss`, `fecha_ingreso`, `estado` FROM `empleado` WHERE id_empleado = '$id' ";
            //$id_empleado,$nombre1,$nombre2,$apellido1,$apellido2,$cedula,$telefono,$firma,$id_puesto,$id_sitio,$id_jefe,$inss,$fecha_ingreso,$fecha_retiro,$estado
            $result = Connection::getConnection()->query($query);
            $row=$result->fetch_assoc();
            $empleado =  new Empleado($row['id_empleado'],$row['nombre1'],$row['nombre2'],$row['apellido1'],
                $row['apellido2'],$row['cedula'],$row['telefono'],$row['firma'],$row['id_puesto'],
                $row['id_sitio'],$row['id_jefe'],$row['inss'],$row['fecha_ingreso'],$row['estado']);
            Connection::close();
            return $empleado;
        }
    }
?>
