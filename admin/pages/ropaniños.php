<!DOCTYPE html>
<html lang="es">

<head>
  <title>Hombres</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .texto {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("location: index.php?error=1");
    exit();
  }
  include "../class/Producto.php";
  ?>
</head>

<body>

  <div class="jumbotron">
    <div class="container text-center">
      <a href="index.html" class="LinkLogo">
        <h1>H&M</h1>
      </a>
      <p>Costa Rica</p>
    </div>
  </div>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="admin.php">Home</a></li>
          <li><a href="ropahombre.php">Info Ropa Hombre</a></li>
          <li><a href="ropamujer.php">Info Ropa Mujer</a></li>
          <li class="active"><a href="ropaniños.php">Info Ropa Niño</a></li>
        </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="listadeseos.html"><span class="glyphicon glyphicon-heart"></span> Favs</a></li>
          <li><a href="registro.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          <li><a href="carritocompras.html"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="contenedor contenido">

    <h2 class="texto">Productos</h2>
    <button type="button" href="nuevoproducto.php" class="btn btn-secondary btn-lg">Agregar producto</button>
    <?php $productos = Producto::getNiño(); ?>
    <?php if (empty($productos)) {  ?>
      <div>
        <p class="texto">No hay productos almacenados en el sistema.</p>
      </div>
    <?php } else { ?>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID del Producto</th>
            <th>Nombre de la imagen</th>
            <th>Nombre del Producto</th>
            <th>Precio</th>
            <th>Talla</th>
            <th>Cantidad</th>
          </tr>
        </thead>

        <tbody>

          <?php

          foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto->getIDProducto() . "</td>";
            // echo "<td>" . $producto->getIDTipo() . "</td>";
            // echo "<td>" . $producto->getIDCategoria() . "</td>";
            // echo "<td>" . $producto->getIDMarca() . "</td>";
            echo "<td>" . $producto->getImagen() . "</td>";
            echo "<td>" . $producto->getNombrePrenda() . "</td>";
            echo "<td>" . $producto->getPrecio() . "</td>";
            echo "<td>" . $producto->getTalla() . "</td>";
            echo "<td>" . $producto->getCantidad() . "</td>";
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

    <?php } ?>

    <br><br>

    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
          <!-- Github -->
          <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">H&M.com</a>
      </div>
      <!-- Copyright -->
    </footer>

</body>

</html>