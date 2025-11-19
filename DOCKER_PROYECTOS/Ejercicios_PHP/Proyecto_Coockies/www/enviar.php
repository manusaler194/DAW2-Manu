<?php
ob_start();
$duracion = 365 * 24 * 60 * 60;
// if (!isset($_COOKIE['visitante'])) {
    
//     setcookie('visitante', '1', time() + 10);
//     $mensaje = "Bienvenida";
//     echo "<div style='background-color: blue;'>$mensaje</div>";
// } else {
    
//     $mensaje = "Ya estás de vuelta";
//     echo "<p style='color: blue;'>$mensaje </p>";
// }



if (isset($_COOKIE['contador_visitas'])) {
    
    $visitas = $_COOKIE['contador_visitas'] + 1;
} else {
    
    $visitas = 1;
}
setcookie('contador_visitas',$visitas,time() + $duracion);


echo "<br>Usetd ha visitado esta pagina $visitas veces";

?>