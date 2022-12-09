<?php

class Conexion
{
    protected $link;

    public function conectar()
    {
        $this->link = mysqli_connect("localhost", "root", "brl092022", "TIENDAHM");
    }

    public function cerrar()
    {
        $this->link->close();
    }
}
