<?php 
    require 'helpers/conn.php';
    require_once 'includes/header.php';
    require 'controladores/usuario.controlador.php';
    require 'modelos/usuarios.modelo.php';
    session_start();
?>
    <!-- Login -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Iniciar Sesion</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" required class="form-control" placeholder="Nombre de usuario">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="contrasena" required class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recuerdame
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Iniciar" class="btn float-right login_btn">
                        </div>
                        <?php
                            $usuarioControlador = new UsuarioControlador();
                            $usuario = $usuarioControlador->login();
                            if($usuario == 'errorlogin') : ?>
                            <script>
                                swal("Iniciar Sesion", "Nombre de usuario y/o contraseña incorrecta", "error");
                            </script>

                            <?php 
                                 elseif($usuario != null && $usuario->num_rows > 0) :
                                 
                                     while($user = mysqli_fetch_assoc($usuario))
                                     {
                                         $user_id = $user['id'];
                                         $user_name = $user['nombre'];
                                         $user_correo = $user['correo'];
                                     }
                                     $_SESSION['usuario'] = $user_id;
                                     $_SESSION['nombre'] = $user_name;
                                     $_SESSION['login'] = 'ok';
                                     $_SESSION['correo'] = $user_correo;
                                     header("Location: main.php");
                                 
                            
                            ?>
                                
                            <?php endif ?>
                           
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes una cuenta?<a href="registro.php">Registrate</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>


</body>
</html>