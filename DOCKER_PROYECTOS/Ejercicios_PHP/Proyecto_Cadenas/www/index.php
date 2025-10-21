<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
    <?php
    $frase2 ="EsCrIbE UnA CódIgO QuE TrAnSfOrMe eStA FrAsE";
    $frase2 = strtolower($frase2);
    $frase = "hola como estas me llamo manu";
    $res ="";
    
    for ($i=0; $i < strlen($frase); $i++) { 
        $pos = $frase[$i];
        if ($i %2==0){ 
            $res .= strtoupper($frase[$i]) ;
        
        }
        $res .= $frase[$i];
        
    }

    echo $res;

    $ejer2 = $frase;
    $countpalabra = 0;
    

    ?>
</body>
</html>