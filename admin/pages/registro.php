<!DOCTYPE html>
<html lang="es">

<head>
  <title>HYM</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php
    session_start();
    // if (!isset($_SESSION["login"])) {
    //     header("location: index.php?error=1");
    //     exit();
    // }
    include "../class/Usuarios.php";
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

    <form class="form" action="../controller/usuario.php" method="post">
      <div class="container">
        <h1>Registrarse</h1>
        <hr>

        <label for="cedula"><b>Cédula</b></label>
        <input type="text" placeholder="Número de Cédula" name="cedula" id="cedula" required>

        <label for="nombre"><b>Nombre del usuario</b></label>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" required>

        <label for="primer_apellido"><b>Primer Apellido</b></label>
        <input type="text" placeholder="Primer Apellido" name="primer_apellido" id="primer_apellido" required>

        <label for="segundo_apellido"><b>Segundo Apellido</b></label>
        <input type="text" placeholder="Segundo Apellido" name="segundo_apellido" id="segundo_apellido" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Correo Electrónico" name="email" id="email" required>

        <label for="telefono"><b>Número telefónico</b></label>
        <input type="text" placeholder="Número de teléfono" name="telefono" id="telefono" required>

        <label for="contra"><b>Contraseña</b></label>
        <input type="password" placeholder="Escriba su contraseña" name="contra" id="contra" required>

        <p>Al crear una cuenta acepta nuestros <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Registrarse</button>
      </div>
      <div class="container signin">
        <p>¿Ya posee una cuenta? <a href="signin.html">Iniciar sesión</a>.</p>
      </div>
    </form>

  </body>

</html>