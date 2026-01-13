<?php 
session_start();



if (!isset($_SESSION["juego"])){
    $_SESSION["juego"] =0;
}
if (isset($_POST["tirar"])){
if (isset($_POST["minimo"]) && isset($_POST["maximo"])){
    for ($i=0; $i < $_POST["maximo"]; $i++) { 
        if($i>=$_POST["minimo"] && $i<= $_POST["maximo"]){

            $_SESSION["juego"][$i] =1;
        } else {
            $_SESSION["juego"][$i] =0;
        }
    }
    
}
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?php 

    for ($i=0; $i <$_POST["maximo"] ; $i++) { 
        if ($_SESSION["juego"][$i] == 1){
            echo "<img src='./bolera/bolo.png'>";
            echo "<button name='bolo'".$i."'>delete</button>";
        }
    }

    ?>
    </form>
    <form action="" method="post">

    <input type="number" name="minimo" id="">
    <input type="number" name="maximo">
    <button name="tirar">TIRAR</button>
    <button name="borrar">Borrar</button>
</form>

</body>
</html>