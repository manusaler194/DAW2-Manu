<?php
require_once "conecta.php";
session_start();

if (!isset($_SESSION["juego"])) $_SESSION["juego"] = new Conecta4();
$j = $_SESSION["juego"];


if (isset($_POST["reset"])) {
    $j->reiniciar();
}


if (isset($_POST["col"])) {
    $col = $_POST["col"];
    $j->tirar($col);
}

$_SESSION["juego"] = $j;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    tr,
    td,
    table {

        border: solid;
        padding: 10px;
    }
</style>

<body>

    <h2>Turno: <?php echo ($j->turno == "R") ? "Rojo" : "Amarillo"; ?></h2>

    <table>
        <?php
        for ($f = 0; $f < 6; $f++) {
            echo "<tr>";
            for ($c = 0; $c < 7; $c++) {
                $v = $j->tablero[$f][$c];
                if ($v == "R") echo "<td style='background:red'></td>";
                else if ($v == "Y") echo "<td style='background:yellow'></td>";
                else echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php if (!$j->fin) { ?>
        <form method="post">
            <?php for ($c = 0; $c < 7; $c++) echo "<button name='col' value='$c'>Col " . ($c + 1) . "</button> "; ?>
        </form>
    <?php } else { ?>
        <h3>Ganador: <?php echo ($j->ganador == "R") ? "Rojo" : "Amarillo"; ?></h3>
    <?php } ?>

    <form method="post"><button name="reset">Reiniciar</button></form>

</body>

</html>