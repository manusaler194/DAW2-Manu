<?php 
ob_start();
session_start();

if (!isset($_SESSION['tirada'])){
    $_SESSION['tirada'] =0;
    $_SESSION['premio'] =0;

    for ($i=0; $i < 4; $i++) { 
        
        $_SESSION['numeros'][$i] = rand(0,15);
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
    
    <h4>Numeros premiados <?php foreach ($_SESSION['numeros'] as $numero) echo $numero . " "; ?></h4>
    
    <h3 style="color:blue"> PREMIOS ACUMULADOS </h3>
    <h4 style="color: blue;">Tiradas: <?php echo $_SESSION['tirada']++;   ?></h4>

    <form action="" method="post">

    <?php 
    
    for ($i=0; $i <16 ; $i++) { 
        echo "<button type='submit' name='valor' value='$i'>$i</button>";
        if (($i+1)%4==0){
            echo "<br>";
        }
    } 

    
    print_r($_SESSION['numeros'][1]);

    ?>
    
    </form>




</body>
</html>