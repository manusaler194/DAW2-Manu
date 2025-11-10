<?php
session_start();




//session_unset();
    if (isset($_SESSION['cesta'])){
        $_SESSION['cesta'] = [];
    }

   
if (isset($_POST['aniadir'])){
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    if (isset($_SESSION['cesta'][$producto])){
        $_SESSION['cesta'][$producto]['cantidad'] +=$cantidad;
    } else {
        $_SESSION['cesta'][$producto] = [
            'cantidad' => $cantidad
        ];
    }
}






if (isset($_POST['borrartele'])) {unset($_SESSION['tele']);}
if (isset($_POST['borrarraton'])) {unset($_SESSION['raton']);}
if (isset($_POST['borrarteclado'])) {unset($_SESSION['teclado']);}
if (isset($_POST['borrarcpu'])) {unset($_SESSION['cpu']);}
if (isset($_POST['cerrarSesion'])) {session_unset();}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
    
   

<form method="post">
    <input type="text" name="producto" >
    <input type="number" name="cantidad" id="">
    <input type="submit" value="Añadir" name="aniadir">
    <input type="submit" value="Reset" name="reset">
</form>
<?php

echo '<form method="post">
    <p>Tele = '. $_SESSION['tele'] . '</p>
    
    
    <input type="submit"name="borrartele" value="borrartele">
</form>

<form method="post">
    <p>Ratón = '. $_SESSION['raton'] . '</p>
    
    
    <input type="submit"name="borrarraton" value="borrarraton">
</form>

<form method="post">
    <p>Teclado = '. $_SESSION['teclado'] . '</p>
    
    
    <input type="submit"name="borrarteclado" value="borrarteclado">
</form>

<form method="post">
    <p>CPU = '. $_SESSION['cpu'] . '</p>
    
    <input type="submit"name="borrarcpu" value="borrarcpu">
</form>';


?>

    
</body>
</html>