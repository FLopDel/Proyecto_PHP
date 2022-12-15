<h1>Registrarse</h1>
<!--Formulario para añadir categoria-->
<form action="<?=base_url?>Categoria/añadir" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" style="width:250px" placeholder="Introduzca el nombre de la categoria" required>
    <br><br>

    <input type="submit" value="Añadir">
    
</form>