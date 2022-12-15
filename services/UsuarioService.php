<?php
namespace Services;
use Repositories\UsuarioRepository;

class UsuarioService{

    public UsuarioRepository $repository;

    function __construct(){
        $this->repository = new UsuarioRepository();
    }

    public function registroUsuario($nombre, $apellidos, $email, $password, $fecha):void{
        /*Funcion para registrar un usuario */
        $this->repository->registro($nombre, $apellidos, $email, $password, $fecha);
    }

    public function comprobarUsuario($usuario){
        /*Funcion para comprobar los datos del usuario */
        return $this->repository->comprobar($usuario);
    } 
    
    public function modificarUsuario($nombre, $email, $usuario):void{
        /*Funcion para modificar los datos de los usuarios */
        $this->repository->modificar($nombre, $email, $usuario);
    }

   
}