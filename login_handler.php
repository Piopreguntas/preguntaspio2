<?php
include("con_db.php");

if (isset($_POST['login'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Contraseña']) >= 1) {
        $Nombre = trim($_POST['Nombre']);
        $Contraseña = trim($_POST['Contraseña']);
        $consulta = "SELECT * FROM datos WHERE nombre='$Nombre' AND contraseña='$Contraseña'";
        $resultado = mysqli_query($conex, $consulta);
        
        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $grado = $row['grado'];
            
            switch ($grado) {
                case '6':
                    header("Location: grado6.php");
                    break;
                case '7':
                    header("Location: grado7.php");
                    break;
                case '8':
                    header("Location: grado8.php");
                    break;
                case '9':
                    header("Location: grado9.php");
                    break;
                case '10':
                    header("Location: grado10.php");
                    break;
                case '11':
                    header("Location: grado11.php");
                    break;
                // Agrega más casos según los grados que necesites manejar
                default:
                    header("Location: index.php");
                    break;
            }
            exit();
        } else {
            echo "<h2>Usuario o contraseña incorrectos</h2>";
        }
    } else {
        echo "<h2>Por favor complete todos los campos</h2>";
    }
}
?>
