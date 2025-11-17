<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: solid;
    }
</style>
<body>
<?php 
$asignaturas = [];
$fichero = fopen("./notasalumnos.csv", "r");
    echo "<table>";

    while (!feof($fichero)) {
        
        $line = fgets($fichero);
        $separado = explode(",",$line);
        if (!isset($asignaturas[$separado[1]])){

            
            $asignaturas[$separado[1]]['total']= $separado[2];
            $asignaturas[$separado[1]]['num_alum'] =1;
            
        }else {
            $asignaturas[$separado[1]]['total']+= $separado[2];
            $asignaturas[$separado[1]]['num_alum'] +=1;

        }
        
        
        
        
        
    }
   
    echo "<tr>";
    echo "<td>Asigantura</td>
            <td>Media</td>
            <td>Num Alumnos</td></tr><tr>";
    foreach ($asignaturas as $key => $value){
        echo "<td>$key</td>";
        $asignaturas[$key]["total"] =$asignaturas[$key]['total'] / $asignaturas[$key]['num_alum'];
        foreach ($asignaturas[$key] as $key2 => $value2){
            echo "<td>$value2</td>";
        }
        echo "</tr>";
    }
   
    print_r($asignaturas["VL2"]['num_alum']);
    echo "<br>";
    print_r($asignaturas["VL2"]['total']);
    echo "</table>";
    fclose($fichero);




?>
    
</body>
</html>