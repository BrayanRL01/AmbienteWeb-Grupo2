<?php
include "../class/Producto.php";

if (!isset($_POST["imagen"])) {
    header("location: ../pages/ropahombre.php");
    exit();
}

$producto = new Producto(
    $_POST["id_producto"],
    $_POST["id_tipo"],
    $_POST["id_categoria"],
    $_POST["id_marca"],
    $_POST["imagen"],
    $_POST["nombre_prenda"],
    $_POST["precio"],
    $_POST["talla"],
    $_POST["cantidad"]
);

$respuesta = $producto->crearProducto();

if ($respuesta == "OK") {
    header("location: ../pages/ropahombre.php?codigo=1");
    exit();
}

header("location: ../pages/productos.php?codigo=4&error=" . $respuesta);
exit();
