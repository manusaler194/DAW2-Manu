<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();





    $usuario = trim($_POST['usuario'] ?? '');
    $contra = trim($_POST['contra'] ?? '');
    $recordar = isset($_POST['recordar']);

if (empty($usuario) || empty($contra)) {
        echo "<h2 style='color:red;'>Usuario o contraseña vacíos</h2>";
    } else {
        
        $_SESSION['usuario'] = $usuario;

        
        if ($recordar) {
            setcookie("recordar", $usuario, time() + 3600);
        }

        
        header("Location:./autenticar.php");
        exit;
    }


?>
<body>
    
    <form action="" method="post">
    <fieldset>
    <input type="text" name="usuario">
    <br>
    <input type="password" name="contra">
    <br>

    <input type="checkbox" name="recordar" id="" value="Recordar">
    <br>
    <input type="submit" value="LOGIN">
    </fieldset>
    </form>
    
    


</body>
</html>