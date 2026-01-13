<?php 
session_start();
//session_destroy();

if (isset($_POST["reiniciar"])) {
   $_SESSION = [];
    
} 
if (!isset($_SESSION["columna"]) && !isset($_SESSION["fila"])){
    $_SESSION["columna"] =4;
    $_SESSION["fila"] = 4;
}
if (isset($_POST["arriba"])) {
        if ($_SESSION["fila"] ==0) {
            $_SESSION["fila"] =7;
        }   else {
            $_SESSION["fila"] --;
        }
    }
if (isset($_POST["abajo"])) {
        if ($_SESSION["fila"] ==7) {
            $_SESSION["fila"] =0;
        }   else {
            $_SESSION["fila"] ++;
        }
    }
    if (isset($_POST["izquierda"])) {
        if ($_SESSION["columna"] ==0) {
            $_SESSION["columna"] =7;
        }   else {
            $_SESSION["columna"] --;
        }
    }
    if (isset($_POST["derecha"])) {
        if ($_SESSION["columna"] ==7) {
            $_SESSION["columna"] =0;
        }   else {
            $_SESSION["columna"] ++;
        }
    }
if (!isset($_SESSION["juego"])) {
    for ($i=0; $i < 8 ; $i++) { 
        
        for ($j=0; $j < 8; $j++) { 
            if ($i ==4 && $j==4) {
                $_SESSION["juego"][$i][$j] =1;
                $_SESSION["fila"]= $i;
                $_SESSION["columna"] =$j;
            }else {

                $_SESSION["juego"][$i][$j] =0;
            }
        }
    }
    
} else {
    $_SESSION["juego"][$_SESSION["fila"]][$_SESSION["columna"]]= 1;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td,tr {
        border: solid;
        width: 15px;
        height: 15px;
    }
    .jugador {
        
        background-color: red;

    }
    
</style>
<body>
    <table>
    <?php 
    
    for ($i=0; $i <8 ; $i++) { 
        echo "<tr>";
        for ($j=0; $j <8 ; $j++) { 
            if ($_SESSION["juego"][$i][$j] ==1) {
                echo "<td class='jugador'></td>";
            }else {

                echo "<td></td>";
            }
        }
        echo "</tr>";
    }

    for ($i=0; $i <8 ; $i++) { 
        
        for ($j=0; $j <8 ; $j++) { 
            
                $_SESSION["juego"][$i][$j] =0;
            
        }
        
    }
    
    ?>
    </table>
    
    <form action="" method="post">
        <button name="arriba">arriba</button>
        <button name="abajo">abajo</button>
        <button name="izquierda">izquierda</button>
        <button name="derecha">derecha</button>
        
    </form>
    
<form action="" method="post">
        
        
        <button name="reiniciar">reset</button>
    </form>
    
</body>
</html>