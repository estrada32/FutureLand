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
                    <h3>Registro</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nombre" class="form-control" required  placeholder="Nombre de usuario">
                            
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" name="correo" class="form-control" required  placeholder="Correo Electronico">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" required  placeholder="Contraseña">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password2" class="form-control" required  placeholder="Repite Contraseña">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Registrar" class="btn float-right login_btn">
                        </div>
                        <?php 
                            $userController = new UsuarioControlador();
                            $registro = $userController->register();
                            if($registro == 'ok') : ?>
                               <script>
                                    swal("Registro", "Registro realizado correctamente", "success");
                                   
                               </script>
                             
                            <?php elseif($registro == 'faltacampo'): ?>
                                <script>
                                    swal("Registro", "Todos los campos son obligatorios", "error");
                                   
                               </script>

                            <?php elseif($registro == 'noiguales') : ?>
                                <script>
                                    swal("Registro", "Las contraseñas no coinciden", "error");
                                   
                               </script>

                            <?php elseif($registro == 'correorepetido') : ?>
                                <script>
                                    swal("Registro", "Correo ya existente", "error");
                                   
                               </script>

                            <?php elseif($registro == 'errorregistro') : ?>
                                <script>
                                    swal("Registro", "Error al registrar, revisa tus datos", "error");
                                   
                               </script>

                            <?php endif ?>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿Ya tienes una cuenta?<a href="index.php">Inicia Sesion</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
                                
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>