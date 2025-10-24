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
    
    echo "<h2>Ejercicio 1</h2>";
    echo "<p>$frase2 </p>";
    $frase2 = strtolower($frase2);
    echo "<p>$frase2 </p>";
    echo "<h2>Ejercicio 2</h2>";
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

    echo "<h2>Ejercicio 3</h2>";
    $mi_array = explode(" ",$frase);
    $total_palabras = str_word_count($frase);
    $total_letras = str_replace(" ","",$frase);
    
    $total_letras = strlen($total_letras);
    echo "<br>Total de palabras = $total_palabras <br>";
    echo "Total de letras = $total_letras";

    for ($i=0; $i <count($mi_array) ; $i++) {
        $res = strlen($mi_array[$i]); 
        echo "<p>La palabra '$mi_array[$i]' tiene = $res letra";
    }
    echo "<h2>Ejercicio 4</h2>";
    $frase = strtolower($frase);
    $a = substr_count($frase,"a");
    $e = substr_count($frase,"e");
    $i = substr_count($frase,"i");
    $o = substr_count($frase,"o");
    $u = substr_count($frase,"u");
    $vocales = $a+$e+$i+$o+$u;
    echo "<p>En total hay $a a</p>";
    echo "<p>En total hay $e e</p>";
    echo "<p>En total hay $i i</p>";
    echo "<p>En total hay $o o</p>";
    echo "<p>En total hay $u u</p>";
    echo "<p>En total hay $vocales vocales</p>";
    echo "<h2>Ejercicio 5</h2>";
    
    $robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";
    $partes = explode(";",$robot);

   $parte = $partes[$i];
   
        

   /*for ($i=0; $i < count($partes); $i++) { 
        $parte = $partes[$i];
        
        
        for ($i=0; $i < $parte[2]; $i++) { 
            echo "&nbsp;$parte[3]";
        }
        if ($artes[1]) {
            echo "&nbsp; ";
        }
    }
    */



    echo "<h2>Ejercicio 6</h2>";
    $numeros = 1123456789;
    $numeros = number_format($numeros, 0, '.');
    echo $numeros;

    $contraseña = "Hola comoestas";
  //  $contraseña = explode($contraseña);
    $vocales = "aeiou";

        if (strlen($contraseña)<6 || strlen($contraseña >10)) {
            Echo "Longitud incorrecta";
        }
        if (strpos ($contraseña, ' ') !== false) {
            echo "No se permiten espacios en blanco";
        }
        for ($i=1; $i <strlen($contraseña) ; $i++) { 
        $contraseña = explode($contraseña);
        if (strpos($vocales,$contraseña[$i])!== false){
            echo "Tiene que tener una vocal";
        }
        }
        $contraseña = explode($contraseña);
        for ($i=0; $i <strlen($contraseña) ; $i++) { 
            if ($strpos($vocales,$contraseña[$i+1])||$strpos($vocales,$contraseña[$i-1])&&$strpos($vocales,$contraseña[$i])!== false){
                echo "No pueden haber mas de dos vocales juntas";
            }
        }
    ?>
</body>
</html>