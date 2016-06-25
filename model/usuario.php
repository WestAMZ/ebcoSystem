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
        return $this->foto;
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
}
?>
