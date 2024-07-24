<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilos.css">
    <title>Iniciar Sesión</title>
    <link rel="icon" href="" type="image/x-icon">
</head>
<body>
    <form method="post">
        <h1>Iniciar Sesión</h1>
        <input type="text" name="Nombre" placeholder="Usuario" autocomplete="off" required>
        <input type="password" name="Contraseña" placeholder="Contraseña" required>
        <button type="submit" name="login" class="boton-enviar">Enviar</button>
    </form>
    <a href="index.php">No tienes cuenta aun?</a>
    
    <?php
    include("login_handler.php");
    ?>
</body>
</html>
