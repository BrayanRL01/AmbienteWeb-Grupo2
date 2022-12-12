<!DOCTYPE html>
<html lang="es">

<head>
    <title>Hombres</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                    <li><a href="ropaniños.php">Info Ropa Niño</a></li>
                    <li class="active"><a href="nuevoproducto.php">Crear Producto</a></li>

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

    <section class="container">

        <h2>Datos del producto</h2>
        <form class="form" action="../controller/producto.php" method="post">
            <legend>Nuevo producto</legend>
            <div>
                <div class="mb-3">
                    <label for="id_tipo" class="id_tipo">Tipo de Prenda (1. Camisa, 2. Pantalón)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_tipo" placeholder="Tipo de Prenda">
                </div>
                <br>
                <div class="mb-3">
                    <label for="id_categoria" class="id_categoria">Categorías (1. Hombre, 2. Mujer, 3. Niño/a)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_categoria" placeholder="Categoría del Producto">
                </div>
                <br>
                <div class="mb-3">
                    <label for="id_marca" class="id_marca">Marcas (1. H&M)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="id_marca" placeholder="Marca del Producto">
                </div>
                <br>
                <div class="mb-3">
                    <label for="imagen" class="imagen">Imagen del Producto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="imagen" placeholder="Nombre de la imagen">
                </div>
                <br>
                <div class="mb-3">
                    <label for="nombre_prenda" class="nombre_prenda">Nombre del Producto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_prenda" placeholder="Nombre de la prenda">
                </div>
                <br>
                <div class="mb-3">
                    <label for="precio" class="precio">Precio del Producto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="precio" placeholder="Precio de la prenda">
                </div>
                <br>
                <div class="mb-3">
                    <label for="talla" class="talla">Talla del Producto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="talla" placeholder="Talla de la prenda">
                </div>
                <br>
                <div class="mb-3">
                    <label for="cantidad" class="cantidad">Cantidad de Productos</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="cantidad" placeholder="Cantidad de prendas">
                </div>
                <br>
                <div>
                    <button class="boton enviar" type="submit">Crear</button>
                </div>
            </div>
        </form>

    </section>


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