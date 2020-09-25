<?php

    class UsuarioControlador{
        public function login()
        {
            if(!empty($_POST['nombre']))
            {
                $nombre = $_POST['nombre'];
                $contrasena = $_POST['contrasena'];
                $usuario = UsuarioModelo::login($nombre,$contrasena);
                if($usuario->num_rows>0)
                {
                    return $usuario;
                }
                return 'errorlogin';
            }
            
        }

        public function register()
        {
            if(!empty($_POST['nombre']))
            {
                // Validamos todos los campos
                if($_POST['nombre'] == "" || $_POST['correo'] == "" || $_POST['password'] == "" || $_POST['password2'] == "")
                {
                    return "faltacampo";
                }
                else{
                    if($_POST['password'] != $_POST['password2'])
                    {
                        return "noiguales";
                    }

                    // Validamos si el email esta en la base de datos
                    $validarCorreo = UsuarioModelo::validaEmail($_POST['correo']);
                    if($validarCorreo->num_rows == 0)
                    {
                        // Aqui el correo no existe- lo registriamos
                        $nombre = $_POST['nombre'];
                        $correo = $_POST['correo'];
                        $password = $_POST['password'];
                        // Validamos que los campos sean correctos
                        

                        $registrar = UsuarioModelo::register($nombre,$correo,$password);
                        if($registrar == true)
                        {
                            return "ok";
                        }
                        else{
                            return "errorregistro";
                        }
                    }
                    else{
                        return "correorepetido";
                    }
                }
                
                
            }
        }
    }


?>