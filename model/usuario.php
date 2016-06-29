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

    public function __construct(){}
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
        $this->id_usuario = $id_usuario;
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

    static function saveUsuario()
    {
        $added = false;
        Connection :: connect();
        $returned = Connection :: getConnection() -> query("SELECT `correo` FROM `usuario` WHERE `correo` = '$this->correo' LIMIT 1");
        if(!($returned->num_rows >0))
        {

           $returned2 = Connection :: getConnection() -> query("SELECT MAX(id_usuario) as id_usuario FROM usuario");
           $obj = $returned->fetch_assoc();


        }
        else
        {
            $obj = $returned->fetch_assoc();
                if(strtolower($obj['correo']) == strtolower($this->correo))
                    {
                     $this->add_error = '<div class="alert alert-dismissible alert-danger">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     ya existe un usuario con este correo electronico </div>';
                    }
        }
    }

    //$id_usuario, $correo, $contrasena, $foto, $role, $estado, $id_empleado
    static function getUsuarioById($id)
    {
        Connection::connect();
            $query = "SELECT `id_usuario` as id_usuario,`correo` as correo,`password` as password,`id_empleado` as id_empleado,`role` as role,`estado` as estado,`foto` as foto FROM `usuario` WHERE `id_usuario` = '$id'";

            $result = Connection::getConnection()->query($query);
            $row=$result->fetch_assoc();
            $usuario =  new Usuario();

            $usuario->setIdUsuario($row['id_usuario']);
            $usuario->setCorreo($row['correo']);
            $usuario->setContrasena($row['password']);
            $usuario->setFoto($row['foto']);
            $usuario->setRole($row['role']);
            $usuario->setEstado($row['estado']);
            $usuario->setIdEmpleado($row['id_empleado']);

        //Usuario($row['id_usuario'],$row['$correo'],$row['password'],$row['foto'],$row['role'],$row['estado'],$row['id_empleado']);
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
