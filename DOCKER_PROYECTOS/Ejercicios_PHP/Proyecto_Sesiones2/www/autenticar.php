<?php
session_start();


$usuarios=[ ['usuario'=>'estefania','password'=>'1111', 'nombre'=>'Estefania Maestre','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'julio','password'=>'2222', 'nombre'=>'Julio Noguera','rol'=>'ROLE_PROFE'],

 ['usuario'=>'jose','password'=>'4444', 'nombre'=>'José Vicente','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'ana','password'=>'333', 'nombre'=>'Ana Fuertes','rol'=>'ROLE_ALUMNO'],

 ['usuario'=>'admin','password'=>'999', 'nombre'=>'Administrador','rol'=>'ROLE_PROFE'],

];

$usuario = $_SESSION['usuario'] ?? '';
$contra = $_POST['contra'] ?? '';

if (!isset($usuarios[$usuario]) || $usuarios[$usuario]['password'] !== $contra) {
    
    
    
    header("Location:./index.php");
    
}


$_SESSION['rol'] = $usuarios[$usuario]['rol'];





header("Location:./menu.php");


?>

