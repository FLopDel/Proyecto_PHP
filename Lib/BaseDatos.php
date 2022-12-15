<?php

namespace Lib;
use PDO;

class BaseDatos{
    private PDO $conexion;
    private mixed $resultado;


    function __construct(
        private string $servidor = SERVIDOR,
        private string $usuario = USUARIO,
        private string $pass = PASS,
        private string $base_datos = BASE_DATOS,
    ){
        $this->conexion = $this->conectar();
    }

    private function conectar(): PDO {
        try{
            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            );
        $conexion = new PDO("mysql:host={$this->servidor};dbname={$this->base_datos};charset=utf8",$this->usuario, $this->pass, $opciones);
        return $conexion;
        }catch(PDOException $e){
            echo 'Ha surgido in error y no se puede cpnectar a la base de datps. Detalle: '.$e->getMessage();
            exit;
        }
    }

    public function consulta(string $consultaSQL):void{
        $this->resultado = $this->conexion->query($consultaSQL);
    }

    public function prepara($pre){
        return $this->conexion->prepare($pre);
    }

    public function extraer_todos():array{
        return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute($prep, $datos){
        return $prep->execute($datos);
    }
}