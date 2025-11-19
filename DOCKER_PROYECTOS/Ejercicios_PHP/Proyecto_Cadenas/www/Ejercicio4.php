<?php
session_start();

if (isset($_POST["borrar"])) {
    $_SESSION = [];
}

if (isset($_POST["jugar"]) || isset($_POST["mover"]) || isset($_SESSION["reiniciar"])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .rojo {
                width: 50px;
                height: 50px;
                background-color: red;
                border: 1px solid black;
            }

            .blanco {
                width: 50px;
                height: 50px;
                background-color: white;
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <table>

            <?php



            if (isset($_POST["jugar"])) {
                $_SESSION["player"] = [4, 4];
                for ($i = 0; $i < 9; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 9; $j++) {
                        if ($_SESSION["player"][0] == $i && $_SESSION["player"][1] == $j) {
                            echo '<td class="rojo"></td>';
                        } else {
                            echo '<td class="blanco"></td>';
                        }
                    }
                    echo "</tr>";
                }
            }


            if (isset($_POST["mover"])) {


                if ($_POST["mover"] == 1) {
                    $_SESSION["player"][0] = $_SESSION["player"][0] - 1;
                    if ($_SESSION["player"][0] < 0) {
                        $_SESSION["player"][0] = 8;
                    }
                    for ($i = 0; $i < 9; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 9; $j++) {
                            if ($_SESSION["player"][0] == $i && $_SESSION["player"][1] == $j) {
                                echo '<td class="rojo"></td>';
                            } else {
                                echo '<td class="blanco"></td>';
                            }
                        }
                        echo "</tr>";
                    }
                }
                if ($_POST["mover"] == 2) {
                    $_SESSION["player"][0] = $_SESSION["player"][0] + 1;
                    if ($_SESSION["player"][0] > 8) {
                        $_SESSION["player"][0] = 0;
                    }
                    for ($i = 0; $i < 9; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 9; $j++) {
                            if ($_SESSION["player"][0] == $i && $_SESSION["player"][1] == $j) {
                                echo '<td class="rojo"></td>';
                            } else {
                                echo '<td class="blanco"></td>';
                            }
                        }
                        echo "</tr>";
                    }
                }
                if ($_POST["mover"] == 3) {
                    $_SESSION["player"][1] = $_SESSION["player"][1] + 1;
                    if ($_SESSION["player"][1] > 8) {
                        $_SESSION["player"][1] = 0;
                    }
                    for ($i = 0; $i < 9; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 9; $j++) {
                            if ($_SESSION["player"][0] == $i && $_SESSION["player"][1] == $j) {
                                echo '<td class="rojo"></td>';
                            } else {
                                echo '<td class="blanco"></td>';
                            }
                        }
                        echo "</tr>";
                    }
                }
                if ($_POST["mover"] == 4) {
                    $_SESSION["player"][1] = $_SESSION["player"][1] - 1;
                    if ($_SESSION["player"][1] < 0) {
                        $_SESSION["player"][1] = 8;
                    }
                    for ($i = 0; $i < 9; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 9; $j++) {
                            if ($_SESSION["player"][0] == $i && $_SESSION["player"][1] == $j) {
                                echo '<td class="rojo"></td>';
                            } else {
                                echo '<td class="blanco"></td>';
                            }
                        }
                        echo "</tr>";
                    }
                }
            }

            ?>
            <form method="post">
                <button name="mover" value="1">arriba</button>
                <button name="mover" value="2">abajo</button>
                <button name="mover" value="3">derecha</button>
                <button name="mover" value="4">izquierda</button>
            </form>
            <form method="post">
                <button name="jugar">Reiniciar</button>
            </form>
            <form method="post">
                <button name="borrar">Borrar</button>
            </form>
        </table>
    </body>

    </html>
    <?php

} else {
    ?>
    <form method="post">
        <button name="jugar">Jugar</button>
    </form>
    <?php
}