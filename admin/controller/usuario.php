<?php
include "../class/Usuarios.php";

if (!isset($_POST["cedula"])) {
    header("location: ../../index.html");
    exit();
}

$usuario = new Usuarios(
    $_POST["usuario_id"],
    $_POST["cedula"],
    $_POST["nombre"],
    $_POST["primer_apellido"],
    $_POST["segundo_apellido"],
    $_POST["email"],
    $_POST["telefono"],
    $_POST["contra"]
);

$respuesta = $usuario->crearUsuario();

if ($respuesta == "OK") {
    header("location: ../../index.html");
    exit();
}

header("location: ../pages/registro.php?codigo=4&error=" . $respuesta);
exit();
