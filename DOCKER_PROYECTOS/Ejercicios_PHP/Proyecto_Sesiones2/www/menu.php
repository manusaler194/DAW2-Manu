<?php
ob_start();
session_start();

$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Menú</title>
</head>

<body>

    <?php
    
        if (time() < $_SESSION['caduca']) {
                if ($rol == 'ROLE_ALUMNO') {
                   

                echo "<h2>El rol de este usuario es de Alumno</h2>";
                echo "<br>";
                echo "<h4>Nombre:  $nombre</h4>";
            } else {
                echo "<h2>El rol de este usuario es de Profe</h2>";
                echo "<br>";
                echo "<h4>Nombre:  $nombre</h4>";
            }
        } else {
            header("Location: ./index.php");
        }
    



    ?>

</body>

</html>