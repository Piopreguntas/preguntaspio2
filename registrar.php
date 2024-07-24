<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
        $Nombre = trim($_POST['Nombre']);
        $Contraseña = trim($_POST['Contraseña']);
        $grado = trim($_POST['grado']);
        $consulta = "INSERT INTO datos(nombre, contraseña, grado) VALUES ('$Nombre','$Contraseña','$grado')";
        $resultado = mysqli_query($conex,$consulta);

    }
    else {
        ?>
        
        <h2>No pusiste datos</h2>

        <?php
    }

}

?>