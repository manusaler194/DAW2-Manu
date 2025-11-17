<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table,
    td,
    tr {
        border: solid;
    }
</style>

<body>
    <form action="" method="POST">

        <input type="text" name="dni" placeholder="DNI"> <br>
        <input type="number" name="nota" placeholder="nota"><br>
        <input type="text" name="ciclo" placeholder="ciclo"><br>
        <input name="fichero_usuario" type="file" /><br>

        <input type="submit" value="enviar"><br>



    </form>

    <form action="grafica.php" method="post">
    <input type="submit" value="Mostrar Gráfica" name="mostrar"><br>
</form>

    <?php
    
    $dni   = $_POST['dni']   ?? null;
    $nota  = $_POST['nota']  ?? null;
    $ciclo = $_POST['ciclo'] ?? null;

    echo "<table>";
    $asignaturas = [];
    $fichero = fopen("./notasalumnos.csv", "r");
     if ($dni !== null && $nota !== null && $ciclo !== null) {

        $fichero_escribir = fopen("./notasalumnos.csv", "a");

        
        $linea = PHP_EOL . $dni . "," . $ciclo . "," . $nota;

        fwrite($fichero_escribir, $linea);

        fclose($fichero_escribir);
    }


    while (!feof($fichero)) {

        $line = fgets($fichero);
        $line = trim($line);
        $separado = explode(",", $line);

        if (!isset($asignaturas[$separado[1]])) {


            $asignaturas[$separado[1]]['total'] = $separado[2];
            $asignaturas[$separado[1]]['num_alum'] = 1;
        } else {
            $asignaturas[$separado[1]]['total'] += $separado[2];
            $asignaturas[$separado[1]]['num_alum'] += 1;
        }
    }

    echo "<tr>";
    echo "<td>Asigantura</td>
            <td>Media</td>
            <td>Num Alumnos</td></tr><tr>";
    foreach ($asignaturas as $key => $value) {
        $media = $asignaturas[$key]['total'] / $asignaturas[$key]['num_alum'];
        
        
        $nombres_asignaturas[] = $key;
        $medias_asignaturas[] = $media;

        
        echo "<td>$key</td>";
        echo "<td>$media</td>";
        echo "<td>" . $asignaturas[$key]['num_alum'] . "</td>";
        echo "</tr>";
    }

    print_r($asignaturas["VL2"]['num_alum']);
    echo "<br>";
    print_r($asignaturas["VL2"]['total']);
    echo "</table>";
    fclose($fichero);

    $_SESSION['asignaturas'] = $nombres_asignaturas;
    $_SESSION['medias'] = $medias_asignaturas;


    ?>
</body>

</html>