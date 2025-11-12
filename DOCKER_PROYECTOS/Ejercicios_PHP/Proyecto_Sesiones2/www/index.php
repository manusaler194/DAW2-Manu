<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php


        $usuario = trim($_POST['usuario'] ?? '');
        $contra = trim($_POST['contra'] ?? '');
        $recordar = isset($_POST['recordar']);


?>
<body>
    
    <form action="./autenticar.php" method="post">
    <fieldset>
    <input type="text" name="usuario" value="<?php if(isset($_COOKIE['nombre'])) echo $_COOKIE['nombre']  ?>">
    <br>
    <input type="password" name="contra">
    <br>

    <input type="checkbox" name="recordar" id="" value="Recordar">
    <br>
    <input type="submit" value="LOGIN">
    </fieldset>
    </form>
    <?php 
    if ($_SESSION['incorrecta']){
        echo "<h2 style='color: red;' >USUARIO O CONTRASEÑA INCORRECTOS</h2>" ;
    }
    ?>
    


</body>
</html>