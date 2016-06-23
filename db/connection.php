<?php
    class Connection
    {
        private static $mysqli = null;
        //validacion de acceso
        public static function login($correo,$pass)
        {
            //error_reporting(~E_WARNING);


            self :: connect();
            $pass = self :: codify($pass);
            $query = "SELECT id_usuario,password,role,id_empleado, FROM usuario  WHERE correo = '$correo' ";
            $result = self :: getConnection() ->query($query);
            if($result->num_rows > 0)
            {
                $row = $result -> fetch_assoc();

                if (!($row['password'] == $pass))
                {
                    echo "Datos ingresados incorrectos o cuenta inactiva";
                }
                else
                {
                    session_start();
                    $_SESSION['session'] = 'active';
                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id_empleado'] = $row['id_empleado'];
                }
            }
            self :: getConnection()->close();

        }
        //conecction

        public static function connect()
        {
            //nombre del host

            $host ="localhost";
            $db = "ebco";
            $user = 'root';
            $pass = '';
           /*datos del host

            $host ="localhost";
            $db = "nicatrip_datos";
            $user = 'nicatrip_datos';
            $pass = 'sistemas123';
            */

            self:: $mysqli =new mysqli($host, $user, $pass,$db);
            if( self :: $mysqli -> connect_error)
            {
                 self :: $mysqli -> close();
                 self :: $mysqli = null;
            }
            return self :: $mysqli -> connect_error;
        }

        public static function close()
        {
            self :: $mysqli->close();
            self :: $mysqli = null;
        }

        public static function logout()
        {
            session_start();
            $_SESSION['session'] = null;
            $_SESSION['nombre'] = null;
            $_SESSION['role'] = null;
            session_unset();
            session_destroy();
            header('Location: ../index.php');
            self :: close();
        }

        public static function getConnection()
        {
            return self :: $mysqli;
        }

        public static function codify($string)
        {
            for($cont = 0; $cont < 1000; $cont++)
            {
                $string = sha1(md5($string));
            }
            return $string;
        }

        public static function filterAuthorization()
        {
            #$isSessionActive = (session_status() == PHP_SESSION_ACTIVE);
            $isSessionActive = isset($_SESSION);
            if( ! $isSessionActive)
            {
                session_start();
            }
            if( isset($_SESSION['session'] ))
            {
                if($_SESSION['session']!='active')
                {
                    header('Location: ../index.php');
                }
            }
            else
            {
                header('?view=index');
            }
        }

        public static function filterInput($string)
        {
            self :: connect();
            $string = htmlspecialchars($string);
            $string = self::getConnection() -> real_escape_string($string);
            self :: close();
            return $string;
        }

    }
?>
