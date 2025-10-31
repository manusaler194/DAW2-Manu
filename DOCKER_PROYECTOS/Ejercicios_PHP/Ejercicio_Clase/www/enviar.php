<?php
if(isset($_POST)){

}







//$nombre=$_GET["nombre"];

print_r($_POST);

$formu = $_POST;

echo "<br>El nombre es $formu[nombre] y el apellido $formu[apellido] <br>";
echo "Su contraseña es $formu[contraseña] <br>";
foreach ($formu['actividades'] as $actividad){
    echo "Usted hace $actividad <br>";

}
echo "Usted es del genero $formu[radio] <br>";
echo "Usted tiene $formu[edad] años<br>";
echo "Su comentario es $formu[comentarios] <br>";
echo "<p style='color:$formu[color] ;'> Su color es $formu[color]</p> ";
echo "El valor oculto es '$formu[oculto]'";
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$suma = $num1 + $num2;
echo "La suma de $num1 + $num2 es = $suma";
?>