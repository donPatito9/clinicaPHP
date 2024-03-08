<?php

class DB
{

    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=bdclinica', 'root', '');
        } catch (PDOException $ex) {
           // $this->conexion = null;
        }
    }

    function getConexion()
    {
        return $this->conexion;
    }
}

?>
