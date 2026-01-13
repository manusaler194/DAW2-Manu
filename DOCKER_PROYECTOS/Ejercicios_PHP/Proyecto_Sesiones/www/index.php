<?php
session_start();

if (isset($_POST['borrartele'])) {unset($_SESSION['tele']);}
if (isset($_POST['borrarraton'])) {unset($_SESSION['raton']);}
if (isset($_POST['borrarteclado'])) {unset($_SESSION['teclado']);}
if (isset($_POST['borrarcpu'])) {unset($_SESSION['cpu']);}
if (isset($_POST['cerrarSesion'])) {session_unset();}


//session_unset();
    if (!isset($_SESSION['tele'])) $_SESSION['tele'] = 0;
    if (!isset($_SESSION['raton'])) $_SESSION['raton'] = 0;
    if (!isset($_SESSION['teclado'])) $_SESSION['teclado'] = 0;
    if (!isset($_SESSION['cpu'])) $_SESSION['cpu'] = 0;

   if(isset($_POST["comprar"])){
$tele = $_POST['tele'];
$raton = $_POST['raton'];
$teclado = $_POST['teclado'];
$cpu = $_POST['cpu'];

$_SESSION['tele'] += $tele;
$_SESSION['raton'] += $raton;
$_SESSION['teclado'] += $teclado;
$_SESSION['cpu'] += $cpu;






}
$total = $_SESSION['tele']*100+$_SESSION['raton']*5+$_SESSION['teclado']*100+$_SESSION['cpu']*200;
echo "CESTA TOTAL = $total";





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
    <p>Tele</p>
    <p>precio 100€</p>
    <input type="number" name="tele" value="0" >
    <input type="submit" name="comprar" value="comprar">



    <p>Ratón</p>
    <p>precio 5€</p>
    <input type="number" name="raton" value="0" >
    <input type="submit"name="comprar" value="comprar">



    <p>Teclado</p>
    <p>precio 100€</p>
    <input type="number" name="teclado" value="0" >
    <input type="submit"name="comprar" value="comprar">


    <p>CPU</p>
    <p>precio 200€</p>
    <input type="number" name="cpu" value="0" >
    <input type="submit"name="comprar" value="comprar">


<input type="submit" name="cerrarSesion" value="cerrarSesion">
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