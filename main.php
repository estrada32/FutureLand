   
        <?php
            session_start();

            if($_SESSION['login'] == 'ok')
            {

            }
            else{
                header("Location: index.php");
            }
        ?>
        
        <!-- Navbar -->
         <?php require_once 'includes/navbar.php'; ?>
        <!-- Fin navbar -->


        <!-- Principal -->
        <br>
        <div class="container">
          
            
            <div id="carouselExampleControls" class="carousel slide status" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="d-flex justify-content-center h-100">
                        <div id="Medidores" class="d-block"></div>
                    </div>
                  </div>

                    <div class="carousel-item ">
                        <div class="card registros justify-content-center h-100 text-white bg-secondary mb-3">
                            <div class="card-header text-center">
                                <h3>Registros</h3>
                            </div>
                            <div class="card-body text-center">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                </div>
                                <input type="text" id="txtHumedad" readonly class="form-control" placeholder="Humedad">
                            </div>

    
                            <div class="row">

                                <div class="col-sm">
                                    8:49 PM (18:49:00)
                                </div>
                            </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="col-sm">
                                    2020-22-09 (Año-dia-mes)
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            
        </div>

        <div class="text-center">
            <label  for="" class="alert letreroHumedad">Cargando...</label>

        </div>

   
    

<?php require_once 'includes/footer.php'; ?>