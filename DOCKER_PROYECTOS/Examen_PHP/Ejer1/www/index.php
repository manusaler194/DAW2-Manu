<?php


$fitxer = fopen("datos.ex", "r");
while (!feof($fitxer)) {
    $line = fgets($fitxer);
    $line = strtolower($line);
    $separado = explode(" ", $line );

    // echo "$line <br>";
    $fp = fopen('emails.jul', 'a');
    echo "<br>";
    
    //print_r();
    if (isset($separado[2])) {

        $email = trim($separado[0][0]) . "." . trim($separado[1]) . trim($separado[2]). "@gmail.com";
    } else {
        //$email = trim($separado[0][0]) . "." . trim($separado[1]). "@gmail.com";
    }
    print_r($email);
    fwrite($fp, $email);
    fwrite($fp, PHP_EOL);
    
    fclose($fp);
}
fclose($fitxer);
?>