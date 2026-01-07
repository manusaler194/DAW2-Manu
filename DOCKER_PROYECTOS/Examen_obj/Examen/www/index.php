<?php
require_once "conecta.php";
session_start();
//session_destroy();

if (!isset($_SESSION["juego"])) $_SESSION["juego"] = new Conecta4();
$j = $_SESSION["juego"];


if (isset($_POST["reset"])) {
    $j->reiniciar();
}

//Nuevo metodo de IA
if (isset($_POST["col"])) {
    $col = $_POST["col"];
    $j->tirar($col);


    if ($j->turno == "Y") {
        while ($j->turno == "Y") {

            $j->jugarIa();
        }
    }
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
    <br>
    <form action="" method="post">
        <p>Elige la ID que quieres borrar</p>
        <input type="number" name="borra">
        <button>enviar</button>
    </form>
    <?php
    if (!isset($_POST["borra"])) $_POST["borra"]=0;
    //TODO LO QUE TENGA QUE VER CON DB
    borrar_Col($_POST["borra"]);
    mostrarDatos();


    function borrar_Col($identicador)
    {

        $dsn = 'mysql:dbname=dbname;host=db:3306';
        $usuario = 'test';
        $contrasena = 'test';

        try {
            $conexion = new PDO($dsn, $usuario, $contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión Establecida con la BD en Docker";
                         //si No recibe ningún valor del $_GET asigna 0.

            $sql = "DELETE FROM conecta4 WHERE id = :idValor";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
            $isOk = $sentencia->execute();                      //borra los valores

            $cantidadAfectada = $sentencia->rowCount();  //Devuelve el número de filas afectadas por la última sentencia SQL
            echo $cantidadAfectada;
        } catch (PDOException $e) {       //en caso de detectar un error lo muestra
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        $conexion = null;    //cierra conexión
    }


    function mostrarDatos()
    {

        $dsn = 'mysql:dbname=dbname;host=db:3306';
        $usuario = 'test';
        $contrasena = 'test';

        try {
            $conexion = new PDO($dsn, $usuario, $contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión Establecida con la BD en Docker";

            $identificador = $_GET["id"] ?? 0;              //si No recibe ningún valor del $_GET asigna 0.

            $sql = "DELETE FROM conecta4 WHERE id = :idValor";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
            $isOk = $sentencia->execute();                      //borra los valores

            $cantidadAfectada = $sentencia->rowCount();  //Devuelve el número de filas afectadas por la última sentencia SQL
            echo $cantidadAfectada;
            $sql = "select * from conecta4";

            $sentencia = $conexion->prepare($sql);
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $sentencia->execute();

            while ($fila = $sentencia->fetch()) {      //vamos recorriendo fila a fila
                echo "Id:" . $fila["id"] . "<br />";
                echo "Player1:" . $fila["player1"] . "<br />";
                echo "Player2:" . $fila["player2"] . "<br />";
                echo "Empate:" . $fila["empate"] . "<br />";
            }
        } catch (PDOException $e) {       //en caso de detectar un error lo muestra
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        $conexion = null;    //cierra conexión


    }




    if ($j->ganador == "R") {
        insertar_Base($j->ganador);
    } else if ($j->ganador == "Y") {
        insertar_Base($j->ganador);
    }
    function insertar_Base(string $ganador)
    {


        $player1 = 0;
        $player2 = 0;
        $empate = 0;
        if ($ganador == "R") {

            $dsn = 'mysql:dbname=dbname;host=db:3306';
            $usuario = 'test';
            $contrasena = 'test';

            try {
                $conexion = new PDO($dsn, $usuario, $contrasena);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión Establecida con la BD en Docker";
                $player1++;      //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"


                $sql = "INSERT INTO conecta4(player1, player2, empate) VALUES (:player1, :player2, :empate)";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(":player1", $player1);
                $sentencia->bindParam(":player2", $player2);
                $sentencia->bindParam(":empate", $empate);
                $isOk = $sentencia->execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok

                $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
                echo $idGenerado;
            } catch (PDOException $e) {       //en caso de detectar un error lo muestra
                echo 'Falló la conexión: ' . $e->getMessage();
            }

            $conexion = null;    //cierra conexión

        }
        if ($ganador == "Y") {

            $dsn = 'mysql:dbname=dbname;host=db:3306';
            $usuario = 'test';
            $contrasena = 'test';

            try {
                $conexion = new PDO($dsn, $usuario, $contrasena);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión Establecida con la BD en Docker";
                $player2++;      //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"


                $sql = "INSERT INTO conecta4(player1, player2, empate) VALUES (:player1, :player2, :empate)";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(":player1", $player1);
                $sentencia->bindParam(":player2", $player2);
                $sentencia->bindParam(":empate", $empate);
                $isOk = $sentencia->execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok

                $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
                echo $idGenerado;
            } catch (PDOException $e) {       //en caso de detectar un error lo muestra
                echo 'Falló la conexión: ' . $e->getMessage();
            }

            $conexion = null;    //cierra conexión

        }
    }
    ?>

</body>

</html>