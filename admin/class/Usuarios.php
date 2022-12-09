<?php
include "Conexion.php";

class Usuarios extends Conexion
{
    protected $USUARIO_ID;
    protected $CEDULA;
    protected $NOMBRE;
    protected $PRIMER_APELLIDO;
    protected $SEGUNDO_APELLIDO;
    protected $EMAIL;
    protected $TELEFONO;
    protected $CONTRASENA;

    public function __construct(
        $USUARIO_ID,
        $CEDULA,
        $NOMBRE,
        $PRIMER_APELLIDO,
        $SEGUNDO_APELLIDO,
        $EMAIL,
        $TELEFONO,
        $CONTRASENA
    ) {
        $this->usuario_id = $USUARIO_ID;
        $this->cedula = $CEDULA;
        $this->nombre = $NOMBRE;
        $this->primer_apellido = $PRIMER_APELLIDO;
        $this->segundo_apellido = $SEGUNDO_APELLIDO;
        $this->email = $EMAIL;
        $this->telefono = $TELEFONO;
        $this->contrasena = $CONTRASENA;
    }

    // Metodos
    public static function getByEmail($correo) // Carlos777
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM USUARIOS WHERE EMAIL = ?";

        $prepare = mysqli_prepare($conexion->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param("s", $correo);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_row();

        $conexion->cerrar();

        if (!empty($dataArray)) {
            return new Usuarios(
                $dataArray[0],
                $dataArray[1],
                $dataArray[2],
                $dataArray[3],
                $dataArray[4],
                $dataArray[5],
                $dataArray[6],
                $dataArray[7]
            );
        }

        return false;
    }

    public function crearUsuario()
    {
        $this->conectar();

        $query = "INSERT INTO USUARIOS (CEDULA, NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EMAIL, 
        TELEFONO, CONTRASENA) VALUES(?, ?, ?, ?, ?, ?, ?)";

        $prepare = mysqli_prepare($this->link, $query);

        // s => cadenas de texto
        // d => doble
        // i => entero
        // b => binarios

        $prepare->bind_param(
            "sssssis",
            $this->cedula,
            $this->nombre,
            $this->primer_apellido,
            $this->segundo_apellido,
            $this->email,
            $this->telefono,
            $this->contrasena
        );

        if ($prepare->execute()) {
            $this->cerrar();
            return "OK";
        } else {
            $this->cerrar();
            return "Error: " . $prepare->error;
        }
    }

    public function ValidarContraseña($CONTRASENA): bool
    {
        return $this->contrasena == $CONTRASENA;
    }

    public function getCedula(): string
    {
        return $this->telefono;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPrimerApellido(): string
    {
        return $this->primer_apellido;
    }

    public function getSegundoApellido(): string
    {
        return $this->segundo_apellido;
    }

    public function getTelefono(): int
    {
        return $this->telefono;
    }
}
