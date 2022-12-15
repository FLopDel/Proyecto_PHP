<h1>Login</h1>

<form action="<?=base_url?>Usuario/login" method="POST">
    <p>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario[usuar]" name="usuario[usuar]" style="width:250px" placeholder="Introduzca su nombre de usuario" required>
    </p>

    <p>
        <label for="clave">Password</label>
        <input type="password" id="usuario[clave]" name="usuario[clave]" style="width:250px" placeholder="Introduzca su contraseña" required>
    </p>
    
    <input type="submit" id="enviar">
    <br><br>
</form>
