<?php
include "../class/Usuarios.php";

if (!isset($_POST["email"])) {
    header("location: ../pages/index.php?error=1");
    exit();
}

if ($_POST["email"] == "") {
    header("location: ../pages/index.php?error=2");
    exit();
}

if ($_POST["contrasena"] == "") {
    header("location: ../pages/index.php?error=2");
    exit();
}

$Usuarios = Usuarios::getByEmail($_POST["email"]);

// echo "<pre>";
// var_dump($usuario);
// echo "</pre>";

if (!$Usuarios) {
    header("location: ../pages/index.php?error=3");
    exit();
}

if ($Usuarios->ValidarContraseña($_POST["contrasena"])) {
    header("location: ../pages/admin.php");
    exit();
} else {
    header("location: ../pages/index.php?error=3");
    exit();
}
