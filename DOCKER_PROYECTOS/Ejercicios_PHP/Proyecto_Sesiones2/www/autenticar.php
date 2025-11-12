<?php
ob_start();
session_start();
include("./bd.php");


$usuario = $_POST['usuario'] ?? '';
$contra = $_POST['contra'] ?? '';


if (empty($usuario) || empty($contra)){
    $_SESSION['incorrecta'] = true;
    header("Location: ./index.php");
}else {
    $_SESSION['incorrecta'] = false;
}

function comprobar($usuario, $contra)
{
  include("./bd.php");
  print_r($usuario);
  print_r($contra);
    $comprobacion = false;
    $res =-1;
    $i=0;

    
    while (!$comprobacion) {
        print_r($i);
        if ($usuarios[$i]["usuario"] === $usuario && $usuarios[$i]["password"] === $contra) {

            $res = $i;
            $comprobacion =true;
            
        }
        $i++;
    }

    return $res;
}
$res = comprobar($usuario, $contra);
if ($res ==-1) {

    header("Location: ./index.php");
} else {


    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $usuarios[$res]['rol'];
    $_SESSION['nombre'] = $usuarios[$res]['nombre'];

    if ($_SESSION['rol'] =='ROLE_ALUMNO') {
        
        $_SESSION['caduca'] = time()+5;
    }
    if ($_SESSION['rol'] =='ROLE_PROFE') {
        
        $_SESSION['caduca'] = time()+5;
    }

    header("Location: ./menu.php");

    if (isset($_POST['recordar'])){
        setcookie("nombre", $usuario,time()+15);
    }
}
