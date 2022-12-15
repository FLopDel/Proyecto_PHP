<?php

namespace Controllers;
use Services\CategoriaService;
use models\Entrada;
use models\Categoria;
use Lib\Pages;

class CategoriaController{
    private CategoriaService $service;
    private Categoria $patient;
    private Pages $pages;

    function __construct(){
        $this->service = new CategoriaService();
        $this->patient = new Categoria();
        $this->pages = new Pages();
    }

    public function mostrarTodos(){
        /*Muestra las categorias */
        $nombreCategoria = $this->patient->getNombreCategoria();
        $this->pages->render('categoria/mostrar_todos',['nombreCategoria'=>$nombreCategoria]);
    }

    public function añadir(){
        /*Inserta las categorias*/
        $this->pages->render('categoria/añadirCategoria');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nombre = $_POST['nombre'];

            $this->service->insertarCategoria($nombre);
            
        }
    }

    public function ver() {
        /*Funcion para ver las categorias en el index */
        if(isset($_GET['id'])) {
            $id = $_GET['id']; //id de la categoria
            $categoria = new Categoria();
            $categoria->setId($id); //$this-id categoria
            $categoria = $categoria->getOne();
            var_dump($categoria);
            die();

            $entrada = new Entrada();
            $entradas= $entrada->setEntradaIdCategoria($categoria->id);

        }
        $this->pages->render('entrada/index', ['categoria' => $categoria, 'entradas' => $entradas]);
    }

    
}