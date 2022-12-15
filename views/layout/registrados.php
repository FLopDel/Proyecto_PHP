<?php session_start(); ?>

<h1>Bienvenido  <?php echo $_SESSION['usuario']['usuar']; ?></h1> 
<?php echo "<a href='http://localhost/proyecto/index.php'>Inicio</a> <br><br>"; ?>
<?php echo "<a href='http://localhost/proyecto/index.php?controller=Entrada&action=publicar'>Publicar entradas</a> <br><br>";?>
<?php echo "<a href='http://localhost/proyecto/index.php?controller=Usuario&action=modificar'>Modificar Datos</a> <br><br>"; ?>

<?php
    if(($_SESSION['rol']) == 1){
        echo "Estas en Zona Admin <br><br>";
        echo "<a href='http://localhost/proyecto/index.php?controller=Categoria&action=añadir'>Crear Categorias</a> <br><br>";
        echo "<a href='http://localhost/proyecto/index.php?controller=Entrada&action=modificarDatos'>Modificar Entrada</a> <br><br>";
        echo "<a href='http://localhost/proyecto/index.php?controller=Entrada&action=borrar'>Borrar Entrada</a> <br><br>"; 

    }

?>
    
