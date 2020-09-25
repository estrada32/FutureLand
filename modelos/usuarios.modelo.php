<?php

    class UsuarioModelo{
        public static function  login($nombre, $password)
        {
            $conn = Conectar::ejecutar("select * from usuarios where '$nombre' = nombre and '$password' = contrasena");
            return $conn;
        }

        public static function validaEmail($correo)
        {
            $conn = Conectar::ejecutar("select correo from usuarios where correo = '$correo'");
            return $conn;
        }

        public static function register($nombre,$correo,$password)
        {
            $conn = Conectar::ejecutar("INSERT INTO USUARIOS (id, nombre, correo, contrasena) values (null, '$nombre', '$correo', '$password')");

            return $conn;
        }
    }


?>