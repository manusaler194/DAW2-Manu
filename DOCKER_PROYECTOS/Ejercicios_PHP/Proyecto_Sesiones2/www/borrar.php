<?php
session_start();

unset($_SESSION['id_usuario']);  //sólo borrará la variable de sesión "id_usuario"
//session_destroy();  // borrará todos los datos asociados a ese usuario.
//$_SESSION = array(); // Otra forma de borrar todas las variables sesión.
$_SESSION['id_numero'] +=$_SESSION['id_numero']+10;
?>

<h2>BORRANDO VARIABLES </h2>

<?php
echo "El usuario es: ".$_SESSION['id_usuario'];
echo "<br>";
echo "El apellido es : ".$_SESSION['id_apellido'];
echo "La cantidad es :" .$_SESSION['id_numero'];
?>
<a href="./index.php">return</a>