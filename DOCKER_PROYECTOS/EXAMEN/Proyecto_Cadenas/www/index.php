<?php 
session_start();


if (isset($_POST['borrar'])) {$_SESSION = [];}


if ((isset($_POST['iniciar']))  || isset($_POST['reroll']) || isset($_POST['elegir'])){


    if (isset($_POST['elegir'])){
            print_r($_POST['elegir']);
            if ($_POST['elegir'] == $_SESSION['acertar']) {
               $_SESSION['aciertos'] +=1;
            }else {
                $_SESSION['fallos'] +=1;
            }
        }
        unset($_SESSION['acertar']);
    if (isset($_POST['reroll'])) {unset($_SESSION['acertar']);}

    if (!isset($_POST['elegir'])){$_POST['elegir']=0;}
    if (!isset($_SESSION['aciertos'])){$_SESSION['aciertos']=0;}
    if (!isset($_SESSION['fallos'])){$_SESSION['fallos']=0;}
    if (!isset($_SESSION['acertar'])){$_SESSION['acertar'] = rand(1,4);}
    if (!isset($_SESSION['color'])){$_SESSION['color'] = "";}

    if ($_SESSION['acertar'] == 1){$_SESSION['color'] = "rojo";}
    if ($_SESSION['acertar'] == 2){$_SESSION['color'] = "amarillo";}
    if ($_SESSION['acertar'] == 3){$_SESSION['color'] = "azul";}
    if ($_SESSION['acertar'] == 4){$_SESSION['color'] = "verde";}
    print_r($_SESSION['acertar']);
    print_r($_POST['elegir']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rojo{
            background-color: red;
            width: 100px;
            height: 100px;
        }
        .verde{
            background-color: green;
            width: 100px;
            height: 100px;
        }
        .amarillo{
            background-color: yellow;
            width: 100px;
            height: 100px;
        }
        .azul{
            background-color: blue;
            width: 100px;
            height: 100px;
        }


    </style>
</head>
<body>
    <h3>Color aleatorio</h3>
        <form action="" method="post">
        <?php 
        
        echo "<p>Tienes . $_SESSION[aciertos].  aciertos</p>";
        echo "<p>Tienes . $_SESSION[fallos].  fallos</p>";
        echo "<button class=". $_SESSION['color']."  value=". $_SESSION['acertar']."></button><br>";
        
        ?>
        <button class="rojo" name="elegir" value="1"></button>
        <button class="amarillo" name="elegir" value="2"></button>
        <button class="azul" name="elegir" value="3"></button>
        <button class="verde" name="elegir" value="4"></button>
        <br>
        <input type="submit" name="reroll"  value="Sacar un color">
        <input type="submit" name="borrar" value="Borrar">
    </form>
</body>
</html>
<?php
} else {
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

    <input type="submit" name="iniciar" value="INICIAR">
    

    </form>
</body>
</html>



<?php
}











