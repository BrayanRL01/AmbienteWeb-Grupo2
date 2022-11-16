<?php

class Conexion
{
    public $link;

    public function conectar() {
        $this->link = mysqli_connect("localhost", "root", "brl092022", "tiendahm");
    }

    public function cerrar() {
        $this->link->close();
    }

}