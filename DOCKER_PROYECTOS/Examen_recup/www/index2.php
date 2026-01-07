<?php 
session_start();

if (isset($_POST["borrar"])){
    $_SESSION = [];
}
if (!isset($_SESSION["aciertos"])){
    $_SESSION["aciertos"] = 0;
}
if (!isset($_SESSION["fallos"])){
    $_SESSION["fallos"] = 0;
}
if (!isset($_SESSION["juegod"])){
    for ($i=0; $i < 7; $i++) { 
        
        $_SESSION["juegod"][$i] =0;
    }
    
} 
if (isset($_POST["lanzar"])) {
    $_POST["lanzar"]= rand(0,6);
    $_SESSION["juegod"][$_POST["lanzar"]] = $_POST["lanzar"];
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
    
    print_r($_SESSION);
    echo "El dado lanzado es:<br>";
    if (isset($_POST["lanzar"])){

        echo "<img src='./dados/dado{$_POST['lanzar']}.png'>";
    }
    echo "MOSTRAMSO LOS DADOS:";
    
    for ($i=0; $i < count($_SESSION["juegod"]); $i++) { 
       
        if ($i== $_SESSION["juegod"][$i]) {
            echo "<img src='./dados/dado$i.png'>";
            $_SESSION["aciertos"]++;
        } else {
            echo "<img src='./dados/dado0.png'>";
            $_SESSION["fallos"]++;
        }
    }
    ?>
    
    <form action="" method="post">
    
    
    <button name="lanzar">Lanzar</button>
    <button name="borrar">Borrar</button>
    </form>

</body>
</html>