<?php 
session_start();
if (isset($_POST["borrar"])){

    $_SESSION = [];

}
if (isset($_POST["lanzar"])){
    $_POST["lanzar"] = rand(5,15);
}
if (!isset($_SESSION["cartas"])){
    for ($i=1; $i < 14; $i++) { 
        $_SESSION["cartas"][$i] = 0;
    }
} else {
    for ($i=1; $i <$_POST["lanzar"] ; $i++) { 
        $random = rand(1,13);
        for ($j=1; $j < 14; $j++) { 
            if ($j==$random){
                $_SESSION["cartas"][$j]++;
            }
        }
        echo "<img src='./cartas/c$random.svg'>";
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
<style>
    img {
        width: 30px;
        height: 30px;
    }
</style>
<body>
    <?php 
    
   for ($i=1; $i < 14; $i++) { 
    echo  "Hay ". $_SESSION["cartas"][$i]." cartas de la carta ".$i."<br>";
   }


    ?>
    
    <form action="" method="post">
        <button name="lanzar">lanzar</button>
        <button name="borrar">borrar</button>
    </form>

</body>
</html>