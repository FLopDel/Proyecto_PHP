<?php
    namespace Models;
    
    class Usuarios{

        function __construct(
            private int $id,
            private string $nombre,
            private string $usuario,
            private int $email,
            private int $password,
            private int $rol,
            private int $fecha,

        )
        {}
            public function getId(){
                return $this->id;
            }

            public function setId($id){
                $this->codigo = $id;
            }

            public function getNombre(){
                return $this->nombre;
            }

            public function setNombre(string $nombre){
                $this->nombre = $nombre;
            }

            public function getUsuario(){
                return $this->usuario;
            }

            public function setUsuario(string $usuario){
                $this->usuario = $usuario;
            }

            public function getEmail(){
                return $this->email;
            }

            public function setEmail(int $email){
                $this->email = $email;
            }

            public function getPassword(){
                return $this->password;
            }

            public function setPassword(int $password){
                $this->password = $password;
            }

            public function getRol(){
                return $this->rol;
            }

            public function setRol(int $rol){
                $this->rol = $rol;
            }

            public function getFecha(){
                return $this->fecha;
            }

            public function setFecha(int $fecha){
                $this->fecha = $fecha;
            }

            public static function fromArray(array $data): Usuarios{
                return new Usuarios(
                    $data['id'],
                    $data['nombre'],
                    $data['usuario'],
                    $data['email'],
                    $data['password'],
                    $data['rol'],
                    $data['fecha'],
                );
            }

    }

?>