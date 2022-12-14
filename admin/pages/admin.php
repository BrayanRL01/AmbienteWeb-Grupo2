<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
  <title>HYM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    .jumbotron {
      margin-bottom: 0;
    }

    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .btn {
      padding: 10px 20px;
      background-color: #dd4b39;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
      margin-left: 120px;
    }
  </style>
</head>

<body>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>H&M</h1>
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
          <li class="active"><a href="admin.php">Home</a></li>
          <li><a href="ropahombre.php">Info Ropa Hombre</a></li>
          <li><a href="ropamujer.php">Info Ropa Mujer</a></li>
          <li><a href="ropaniños.php">Info Ropa Niño</a></li>
          <li><a href="nuevoproducto.php">Crear Producto</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="listadeseos.html"><span class="glyphicon glyphicon-heart"></span> Favs</a></li>
          <li><a href="registro.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          <li><a href="carritocompras.html"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="panel-primary">

    <div class="panel-heading">
      <h2 style="margin-left: 600px;">Ofertas de la semana</h2>
    </div>
    <div class="panel-body"><img src="../../img/rs_1024x759-220210112952-1024-HM-LT-21022.webp" class="img-responsive" style="width:100%" alt="Image"></div>
    <a href="ofertas.html"><button style="margin-left: 700px; margin-bottom:40px ; margin-top:30px ; padding-left: 40px;padding-right: 40px;" class="btn">Ver ofertas</button></a>
  </div>

  <footer class="bg-light text-center text-white">
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
        <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>

</body>

</html>