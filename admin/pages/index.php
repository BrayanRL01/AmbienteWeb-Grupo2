<!DOCTYPE html>
<html lang="es">

<head>
    <title>H&M</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="jumbotron">
        <div class="container text-center">
            <a href="index.html" class="LinkLogo">
                <h1>H&M</h1>
            </a>
        </div>
    </div>

    <form action="../controller/login.php" method="POST">
        <div class="container">
            <h1>Iniciar sesión</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Correo Electrónico" name="email" id="email" required>

            <label for="contrasena"><b>Contraseña</b></label>
            <input type="password" placeholder="Escriba su contraseña" name="contrasena" id="contrasena" required>

            <button type="submit" class="registerbtn">Ingresar</button>
        </div>
        <div class="container signin">
            <p>¿No posee una cuenta? <a href="registro.php">Registrarse.</a></p>
        </div>
    </form>
</body>

</html>