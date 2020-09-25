

<?php 
session_start();

if($_SESSION['login'] == 'ok')
{

}
else{
    header("Location: index.php");
}

    require_once 'includes/navbar.php';
    require 'helpers/conn.php';
?>
<h1 class="text-center">Registros</h1>
<div class="">

<?php

$conectar = Conectar::ejecutar("select * from humedad");

?>

<table class="table table-bordered text-center table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Humedad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php while($reg = mysqli_fetch_assoc($conectar)) : ?>
    <!-- echo $n['id'].'<br>'; -->
    <tr>
      <th><?=$reg['id']?></th>
      <td><?=$reg['humedad']?></td>
      <td><?=$reg['fecha']?></td>
      <td><?=$reg['usuario']?></td>
    </tr>
    <?php endwhile ?>
    
  </tbody>
</table>

</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>

<?php require_once 'includes/footer.php'; ?>