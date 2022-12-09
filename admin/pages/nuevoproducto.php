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
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="ropahombre.html">Ropa Hombre</a></li>
                    <li><a href="ropamujer.html">Ropa Mujer</a></li>
                    <li><a href="ropaniños.html">Ropa Niño</a></li>
                    <li><a href="ofertas.html">Ofertas</a></li>
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

        <div class="h_ordenes">
            <h2>Datos del producto</h2>
            <div class="b_ordenes">
                <a class="boton" href="ropahombre.php">Lista de productos (Hombre)</a>
            </div>
        </div>

        <form class="form" action="../controller/producto.php" method="post">
            <legend>Nuevo producto (Hombre)</legend>
            <div>
                <!-- <div class="form_campo">
                    <label for="id_producto">Nombre de la imagen</label>
                    <input id="id_producto" name="id_producto" class="form_text" type="text" placeholder="id producto">
                </div> -->
                <div class="form_campo">
                    <label for="id_tipo">Tipo de Prenda</label>
                    <input id="id_tipo" name="id_tipo" class="form_text" type="text" placeholder="Tipo de Prenda">
                </div>
                <div class="form_campo">
                    <label for="id_categoria">Categoría (Hombre 1, Mujer 2, Niños 3)</label>
                    <input class="form_text" name="id_categoria" id="id_categoria" placeholder="Categoría del Producto" type="text">
                </div>
                <div class="form_campo">
                    <label for="id_marca">Marca del Producto (1. H&M)</label>
                    <input id="id_marca" name="id_marca" class="form_text" type="text" placeholder="Marcas">
                </div>
                <div class="form_campo">
                    <label for="imagen">Nombre de imagen</label>
                    <input id="imagen" name="imagen" class="form_text" type="text" placeholder="Imagen">
                </div>
                <div class="form_campo">
                    <label for="nombre_prenda">Nombre de la Prenda</label>
                    <input class="form_text" name="nombre_prenda" id="nombre_prenda" placeholder="Nombre Prenda" type="text">
                </div>

                <div class="form_campo">
                    <label for="precio">Precio del producto</label>
                    <input id="precio" name="precio" class="form_text" type="text" placeholder="Precio">
                </div>
                <div class="form_campo">
                    <label for="talla">Talla</label>
                    <input id="talla" name="talla" class="form_text" type="text" placeholder="Talla">
                </div>
                <div class="form_campo">
                    <label for="cantidad">Cantidad de productos</label>
                    <input class="form_text" name="cantidad" id="cantidad" placeholder="Cantidad" type="text">
                </div>
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