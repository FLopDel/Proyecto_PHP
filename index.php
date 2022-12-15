<?php
    require_once "autoloader.php";
    require_once './config/config.php';
    require_once 'views/layout/header.php';

    require_once 'controllers/FrontController.php';
    use controllers\FrontController;
    FrontController::main();


?>

<nav>
    <ul>
        <li><a href="<?=base_url?>">Inicio</a></li>
        <li><a href="<?=base_url?>Usuario/login">Identificate</a></li>
        <li><a href="<?=base_url?>Usuario/registro">Registrate</a></li>
        <li><a href="<?=base_url?>Entrada/mostrarTodos">Mostrar Entradas</a></li>
        <li><a href="<?=base_url?>/logout.php">Cerrar Sesion</a></li>

        
    </ul>
</nav>

<?php
    require_once 'views/layout/footer.php';
?>