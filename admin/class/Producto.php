<?php
include "Conexion.php";

class Producto extends Conexion
{
    protected $ID_PRODUCTO;
    protected $ID_TIPO;
    protected $ID_CATEGORIA;
    protected $ID_MARCA;
    protected $IMAGEN;
    protected $NOMBRE_PRENDA;
    protected $PRECIO;
    protected $TALLA;
    protected $CANTIDAD;

    public function __construct(
        $ID_PRODUCTO,
        $ID_TIPO,
        $ID_CATEGORIA,
        $ID_MARCA,
        $IMAGEN,
        $NOMBRE_PRENDA,
        $PRECIO,
        $TALLA,
        $CANTIDAD
    ) {
        $this->id_producto = $ID_PRODUCTO;
        $this->id_tipo = $ID_TIPO;
        $this->id_categoria = $ID_CATEGORIA;
        $this->id_marca = $ID_MARCA;
        $this->imagen = $IMAGEN;
        $this->nombre_prenda = $NOMBRE_PRENDA;
        $this->precio = $PRECIO;
        $this->talla = $TALLA;
        $this->cantidad = $CANTIDAD;
    }

    // Metodos
    public static function getHombre()
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM PRODUCTOS WHERE ID_CATEGORIA = 1";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $productos = [];

        foreach ($dataArray as $data) {
            $producto = new Producto($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            array_push($productos, $producto);
        }

        return $productos;
    }

    public static function getMujer()
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM PRODUCTOS WHERE ID_CATEGORIA = 2";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $productos = [];

        foreach ($dataArray as $data) {
            $producto = new Producto($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            array_push($productos, $producto);
        }

        return $productos;
    }

    public static function getNiño()
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM PRODUCTOS WHERE ID_CATEGORIA = 3";

        $prepare = mysqli_prepare($conexion->link, $query);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_all();

        $productos = [];

        foreach ($dataArray as $data) {
            $producto = new Producto($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]);
            array_push($productos, $producto);
        }

        return $productos;
    }

    public function crearProducto()
    {
        $this->conectar();

        $query = "INSERT INTO PRODUCTOS (ID_TIPO, ID_CATEGORIA, ID_MARCA, IMAGEN, NOMBRE_PRENDA, PRECIO, TALLA, CANTIDAD) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "iiissisi",
            $this->id_tipo,
            $this->id_categoria,
            $this->id_marca,
            $this->imagen,
            $this->nombre_prenda,
            $this->precio,
            $this->talla,
            $this->cantidad
        );

        if ($prepare->execute()) {
            $this->cerrar();
            return "OK";
        } else {
            $this->cerrar();
            return "Error: " . $prepare->error;
        }
    }

    public function getIDProducto(): int
    {
        return $this->id_producto;
    }

    public function getIDTipo(): int
    {
        return $this->id_tipo;
    }

    public function getIDCategoria(): int
    {
        return $this->id_categoria;
    }

    public function getIDMarca(): int
    {
        return $this->id_marca;
    }

    public function getImagen(): string
    {
        return $this->imagen;
    }

    public function getNombrePrenda(): string
    {
        return $this->nombre_prenda;
    }

    public function getPrecio(): int
    {
        return $this->precio;
    }

    public function getTalla(): string
    {
        return $this->talla;
    }

    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    public function EliminarProducto()
    {
        $this->conectar();

        $query = "DELETE FROM PRODUCTOS WHERE ID_PRODUCTO = ?
         AND ID_CATEGORIA = 1";

        $prepare = mysqli_prepare($this->link, $query);

        if ($prepare->execute()) {
            $this->cerrar();
            return "OK";
            header("location: ropahombre.php");
        } else {
            $this->cerrar();
            return "Error: " . $prepare->error;
        }
    }
}
