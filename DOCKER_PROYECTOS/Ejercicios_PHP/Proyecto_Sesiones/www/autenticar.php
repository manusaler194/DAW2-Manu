<?php
session_start();
unset($_SESSION['id_usuario']);
$_SESSION['id_usuario']=$_POST['usuario'];
$_SESSION['id_apellido']=$_POST['apellido'];
$_SESSION['id_numero']=$_POST['numero'] +10;


echo "<h2> CONTINUMAOS CON LA PAGINA numero $_SESSION[id_numero]</h2>";

?>

<br>
<a href="./tercero.php">next</a>