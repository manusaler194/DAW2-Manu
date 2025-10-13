<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos Personales</title>
    <style>
        .tabledatos {
            border-collapse: collapse;
            width: 300px;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
        .tablero {
        width: 270px;
        height: 270px;
        }
        .tablero td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<?php
// Declaración de variables
$nombre = "Manuel";
$apellidos = "Rubio Torrenti";
$email = "manrubtor@alu.edu.gva.es";
$anio_nacimiento = 2005;
$telefono = "600713511";
$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$paises = array_keys($eu);
$capitales = array_values($eu);
$strs = array("abcd","abc","de","hjjj","g","wer");
$numeros = array(
    34, 78, 12, 89, 5, 67, 23, 90, 44, 56,
    3, 99, 18, 72, 41, 27, 63, 81, 6, 14,
    50, 37, 84, 2, 96, 29, 11, 70, 55, 47,
    20, 62, 95, 7, 39, 88, 1, 54, 33, 65,
    19, 73, 28, 42, 8, 92, 31, 76, 60, 49
);
// Mostrar los datos en una tabla HTML
echo '<table class="tabledatos">';
echo "<tr><td><strong>Nombre</strong></td><td>$nombre</td></tr>";
echo "<tr><td><strong>Apellidos</strong></td><td>$apellidos</td></tr>";
echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
echo "<tr><td><strong>Año de nacimiento</strong></td><td>$anio_nacimiento</td></tr>";
echo "<tr><td><strong>Teléfono</strong></td><td>$telefono</td></tr>";
echo "</table><br>";

for ($i=0; $i < count($eu); $i++) { 
     echo "La capital de $paises[$i] es $capitales[$i] <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo '<table class="tablero">';
for ($i=0; $i < 8; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 8; $j++) { 
        if (($j+ $i )%2==0) {
            echo '<td style="background-color: black;"></td>';
        } else {
            echo '<td style="background-color: white;"></td>';
        }
        
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$menor = strlen($strs[0]);

$mayor = strlen($strs[0]);
for ($i=1; $i <count($strs) ; $i++) { 
    
    if ($menor>strlen($strs[$i])){
        $menor = strlen($strs[$i]);
    } 
    if ($mayor<strlen($strs[$i])){
        $mayor = strlen($strs[$i]);
    } 
    
    
}
echo "<p>La longitud más corta es <b>$menor</b> y la más larga es <b>$mayor</b></p>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo '<table class="tablero">';
for ($i=0; $i < 10; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 10; $j++) { 
        if ($i ==0){

            echo "<td style='background-color: blue;'>" . ($j + 1) . "</td>";


        }
        if ($j<10 && $i!=0 &&$j!=0){
            echo "<td style='background-color: white;'>" . (($j+1)*($i+1) ) . "</td>";
        }
        if ($j ==0 && $i!=0){

            echo "<td style='background-color: red;'>" . ($i+1 ) . "</td>";



        }
        
        
    }
    
    echo "</tr>";
}

echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$descendente = $numeros;
$ascendente = $numeros;
rsort($descendente);
sort($ascendente);

echo "<h3> Numeros ordenados de manera descendente</h3>";
for ($i =0;$i<count($numeros);$i++){
        echo "<p> $descendente[$i]</p>";
}
echo "<h3> Numeros ordenados de manera ascendente</h3>";
for ($i =0;$i<count($numeros);$i++){
        echo "<p> $ascendente[$i]</p>";
}
echo "<h3> El primer numero es: $numeros[0]</h3>";
echo "<h3>El último número es: " . end($numeros) . "</h3>";
?>

</body>
</html>
