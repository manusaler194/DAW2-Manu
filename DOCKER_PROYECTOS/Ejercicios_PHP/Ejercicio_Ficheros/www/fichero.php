<?php 

$fichero = fopen("./notasalumnos.csv", "r");
    
    while (!feof($fichero)) {
        $i=0;
        $line = fgets($fichero);
        $separado = explode(",",$line);
        $asignaturas = array($separado);
        
        print_r($asignaturas);
        
        $i++;
    }
    fclose($fichero);
    print_r($asignaturas);




?>