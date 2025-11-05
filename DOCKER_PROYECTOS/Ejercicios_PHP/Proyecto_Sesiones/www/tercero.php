<?php
session_start();
$_SESSION['id_numero'] =$_SESSION['id_numero']+10;
?>

<h2>ya estamos en el final</h2>

<?php
echo "El usuario : ".$_SESSION['id_usuario'];
echo "<br>";
echo "El apellido: ".$_SESSION['id_apellido'];
echo "<br>La cantidad es :" .$_SESSION['id_numero'];
?>

<a href="./index.php">return</a>