<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilos.css">
    <title>Crear Usuario</title>
    <link rel="icon" href="" type="image/x-icon">

</head>
<body>
    <form method="post">
        <h1>Crear Usuario Estudiante</h1>
        <input type="text" name="Nombre" placeholder="Usuario" autocomplete="off" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <br>
        <label for="grade-select">Seleccione su grado:</label>
        <select name="grado">
            <option value="6">Grado 6</option>
            <option value="7">Grado 7</option>
            <option value="8">Grado 8</option>
            <option value="9">Grado 9</option>
            <option value="10">Grado 10</option>
            <option value="11">Grado 11</option>
        </select>
        <button type="submit" name="register" class="boton-enviar">Enviar</button>
    </form>
    <br>
    <a href="login.php">Iniciar Sesión</a>
    
    <?php
    include("registrar.php");
    ?>
</body>
</html>
