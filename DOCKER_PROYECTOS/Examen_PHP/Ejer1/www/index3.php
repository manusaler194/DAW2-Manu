<?php
session_start();
//session_destroy();
if (isset($_POST["reset"])){$_SESSION = [];}
if (!isset($_SESSION["partidas"])) {
    $_SESSION["partidas"] = 0;
}

if (!isset($_SESSION["celda1"]) || !isset($_SESSION["celda2"]) || !isset($_SESSION["celda3"])) {
    $_SESSION["celda1"] = "1";
    $_SESSION["celda2"] = "2";
    $_SESSION["celda3"] = "3";
} 
    
if (isset($_POST["monedas"])) {
    $_SESSION["partidas"]++;
}
if ($_SESSION["partidas"]<=0){
    echo "no tienes monedas para jugar pon una monedas";
}else {

    if (isset($_POST["jugar"])) {
       
        if ($_SESSION["celda1"] == $_SESSION["celda2"] && $_SESSION["celda2"] == $_SESSION["celda3"]) {
            header("Location: ./ganador.php");
        }
        $_SESSION["partidas"]--;
        $_SESSION["celda1"] = rand(1,5);
        $_SESSION["celda2"] = rand(1,5);
        $_SESSION["celda3"] = rand(1,5);
    
    }
}
echo $_SESSION["partidas"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table tr td img {
        border: solid;
        width: 100px;
        height: 100px;
    }
</style>

<body>

    <table>

        <tr>

            <td>a <?php echo '<img src=' . $_SESSION["celda1"] . '.svg>'; ?></td>
            <td>b <?php echo '<img src=' . $_SESSION["celda2"] . '.svg>'; ?></td>
            <td>c <?php echo '<img src=' . $_SESSION["celda3"] . '.svg>'; ?></td>
            
            <td>

                <form action="" method="post">
                    <input type="submit" name="monedas" value="Meter moneda">
                    <?php echo $_SESSION["partidas"] ?><br>
                    <input type="submit" name="jugar" value="jugar">
                    <input type="submit" name="reset" value="reset">
                </form>
            </td>
        </tr>


    </table>
<?php echo $_SESSION["celda1"] ;
            echo $_SESSION["celda2"];
            echo $_SESSION["celda3"]; ?>
</body>

</html>