<?php
include "Conexion.php";

class Usuarios
{
    protected $USUARIO_ID;
    protected $CEDULA;
    protected $ID_PROVINCIA;
    protected $NOMBRE;
    protected $PRIMER_APELLIDO;
    protected $SEGUNDO_APELLIDO;
    protected $EMAIL;
    protected $TELEFONO;
    protected $CONTRASENA;

    public function __construct(
        $USUARIO_ID,
        $CEDULA,
        $ID_PROVINCIA,
        $NOMBRE,
        $PRIMER_APELLIDO,
        $SEGUNDO_APELLIDO,
        $EMAIL,
        $TELEFONO,
        $CONTRASENA
    ) {
        $this->usuario_id = $USUARIO_ID;
        $this->cedula = $CEDULA;
        $this->id_provincia = $ID_PROVINCIA;
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
        $dataArray = $respuesta->fetch_row(); // [1, "Carlos777", "777"]

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
                $dataArray[7],
                $dataArray[8]
            );
        }

        return false;
    }

    public function ValidarContraseña($CONTRASENA): bool
    {
        // if ($this->clave == $clave) {
        //     return true;
        // }else{
        //     return false;
        // }

        return $this->contrasena == $CONTRASENA;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrimerApellido(): int
    {
        return $this->primer_apellido;
    }
}
