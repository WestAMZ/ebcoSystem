<?php
class Usuario
{
    var $id_usuario;
    var $correo;
    var $contrasena;
    var $foto;
    var $role;
    var $estado;
    var $id_empleado;
    function __contruct($id_usuario, $correo, $contrasena, $foto, $role, $estado, $id_empleado)
    {
        $this->id_usuario = $id_usuario;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->foto = $foto;
        $this->role = $role;
        $this->estado = $estado;
        $this->id_empleado = $id_empleado;
    }
    function setIdUsuario($id_usuario)
    {
        $this->id_usuario = id_usuario;
    }
    function getIdUsuario()
    {
        return $this->id_usuario;
    }
    function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }
    function getContrasena()
    {
        return $this->contrasena;
    }
    function setFoto($foto)
    {
        $this->foto = $foto;
    }
    function getFoto()
    {
        if($this->foto == null)
        {
            return 'profile.svg';
        }
        else
        {
            return $this->foto;
        }
    }
    function setRole($role)
    {
        $this->role = $role;
    }
    function getRole()
    {
        return $this->role;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }
    function getEstado()
    {
        return $this->estado;
        return $this->estado;
    }
    function setIdEmpleado($id_empleado)
    {
        $this->id_empleado = $id_empleado;
    }
    function getIdEmpleado()
    {
        return $id_empleado;
    }
    //$id_usuario, $correo, $contrasena, $foto, $role, $estado, $id_empleado
    static function getUsuarioById($id)
    {
        Connection::connect();
            $query = "SELECT `id_usuario` as id_usuario,`correo` as correo,`password` as password,`id_empleado` as id_empleado,`role` as role,`estado` as estado,`foto` as foto FROM `usuario` WHERE `id_usuario` = '$id'";

            $result = Connection::getConnection()->query($query);
            $row=$result->fetch_assoc();
            $usuario =  new Usuario($row['id_usuario'],$row['$correo'],$row['password'],$row['foto'],$row['role'],$row['estado'],$row['id_empleado']);
            Connection::close();
            return $usuario;
    }
    static function getNameUser($id)
    {
            Connection::connect();
            $query = "select CONCAT(e.nombre1,' ',e.apellido1) as nombre from  usuario u INNER JOIN empleado e on u.id_empleado = e.id_empleado where u.id_usuario = '$id'";
            $result = Connection::getConnection()->query($query);
            $row=$result->fetch_assoc();
            $fullname = $row['nombre'];
            Connection::close();
            return $fullname;
    }


}
?>
