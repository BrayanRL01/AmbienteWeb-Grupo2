<?php
include "../class/Usuario.php";

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

$USUARIO = Usuario::getByEmail($_POST["email"]);

// echo "<pre>";
// var_dump($usuario);
// echo "</pre>";

if (!$EMAIL) {
    header("location: ../pages/index.php?error=3");
    exit();
}

if ($USUARIO->getByEmail($_POST["contrasena"])) {
    header("location: ../pages/admin.php");
    exit();
} else {
    header("location: ../pages/index.php?error=3");
    exit();
}
