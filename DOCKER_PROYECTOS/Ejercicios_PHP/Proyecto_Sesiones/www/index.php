<?php
session_start();




//session_unset();
$tele = $_POST['tele'];
$raton = $_POST['raton'];
$teclado = $_POST['teclado'];
$cpu = $_POST['cpu'];

$_SESSION['tele'] += $tele;
$_SESSION['raton'] += $raton;
$_SESSION['teclado'] += $teclado;
$_SESSION['cpu'] += $cpu;


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
    
   <form action="./autenticar.php" method="post">
    <input type="text" name="usuario"><br>
    <input type="text" name="apellido"><br>
    <input type="number" name="numero" id=""><br>
    <input type="submit" value="Envia!">
</form>

<form method="post">
    <p>Tele</p>
    <p>precio 100€</p>
    <input type="number" name="tele" value="0" >
    <input type="submit" value="comprar">
</form>

<form method="post">
    <p>Ratón</p>
    <p>precio 5€</p>
    <input type="number" name="raton" value="0" >
    <input type="submit" value="comprar">
</form>

<form method="post">
    <p>Teclado</p>
    <p>precio 100€</p>
    <input type="number" name="teclado" value="0" >
    <input type="submit" value="comprar">
</form>

<form method="post">
    <p>CPU</p>
    <p>precio 200€</p>
    <input type="number" name="cpu" value="0" >
    <input type="submit" value="comprar">
</form>



    
</body>
</html>