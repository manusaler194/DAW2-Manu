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

$nombre = "Manuel";
$apellidos = "Rubio Torrenti";
$email = "manrubtor@alu.edu.gva.es";
$anio_nacimiento = 2005;
$telefono = "600713511";
$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$paises = array_keys($eu);
$capitales = array_values($eu);
$strs = array("abcd","abc","de","hjjj","g","wer");
$numeros = [
    34, 78, 12, 89, 5, 67, 23, 90, 44, 56,
    3, 99, 18, 72, 41, 27, 63, 81, 6, 14,
    50, 37, 84, 2, 96, 29, 11, 70, 55, 47,
    20, 62, 95, 7, 39, 88, 1, 54, 33, 65,
    19, 73, 28, 42, 8, 92, 31, 76, 60, 49
    ];
$generos = [
    "M","F","M","M","F","F","M","F","M","F",
    "F","M","F","M","F","M","M","F","M","F",
    "M","M","F","F","M","F","M","F","F","M",
    "F","F","M","F","M","M","M","F","M","F",
    "M","M","F","F","F","M","F","M","F","M",
    "F","M","F","M","M","F","F","M","M","F",
    "M","F","F","M","M","F","M","M","M","M",
    "F","F","M","F","M","M","F","M","F","F",
    "M","M","F","M","F","F","M","M","M","F",
    "M","F","F","M","M","F","M","M","F","M"
];
$personas = [
    [
        'nombre' => 'Bruce',
        'apellido' => 'Wayne',
        'ciudad' => 'Gotham',
        'email' => 'bruce.wayne@wayneenterprises.com',
        'altura' => 1.88
    ],
    [
        'nombre' => 'Clark',
        'apellido' => 'Kent',
        'ciudad' => 'Metropolis',
        'email' => 'clark.kent@dailyplanet.com',
        'altura' => 1.90
    ],
    [
        'nombre' => 'Diana',
        'apellido' => 'Prince',
        'ciudad' => 'Themyscira',
        'email' => 'diana.prince@amazon.com',
        'altura' => 1.78
    ],
    [
        'nombre' => 'Barry',
        'apellido' => 'Allen',
        'ciudad' => 'Central City',
        'email' => 'barry.allen@ccpd.com',
        'altura' => 1.82
    ],
    [
        'nombre' => 'Arthur',
        'apellido' => 'Curry',
        'ciudad' => 'Atlantis',
        'email' => 'arthur.curry@oceanmail.com',
        'altura' => 1.85
    ]
];

$comunidades = array(
array("comunidad" => "Andalucía", "provincias" => array("Córdoba" => 7223, "Huelva" => 1611, "Cádiz" => 480, "Sevilla" => 12990, "Málaga" => 16458, "Granada" => 8622, "Jaén" => 322, "Almería" => 8266)),
array("comunidad" => "Aragón", "provincias" => array("Huesca" => 251, "Teruel" => 1633, "Zaragoza" => 2512)),
array("comunidad" => "Asturias", "provincias" => array("Oviedo" => 256)),
array("comunidad" => "Baleares", "provincias" => array("Baleares" => 503)),
array("comunidad" => "Canarias", "provincias" => array("Santa Cruz de Tenerife" => 153, "Las Palmas de Gran Canaria" => 2451)),
array("comunidad" => "Cantabria", "provincias" => array("Santander" => 6511)),
array("comunidad" => "Castilla La-Mancha", "provincias" => array("Albacete" => 121, "Ciudad Real" => 4241, "Cuenca" => 221, "Guadalajara" => 3211, "Toledo" => 4211)),
array("comunidad" => "Castilla y León", "provincias" => array("León" => 231, "Zamora" => 5231, "Salamanca" => 2311, "Valladolid" => 231, "Palencia" => 7621, "Ávila" => 321, "Segovia" => 251, "Burgos" => 5321, "Soria" => 1251)),
array("comunidad" => "Cataluña", "provincias" => array("Barcelona" => 19240, "Gerona" => 11535, "Lérida" => 6052, "Tarragona" => 255)),
array("comunidad" => "Extremadura", "provincias" => array("Cáceres" => 3405, "Badajoz" => 210)),
array("comunidad" => "Galicia", "provincias" => array("A Coruña" => 1512, "Ourense" => 1612, "Lugo" => 1930, "Pontevedra" => 124)),
array("comunidad" => "Madrid", "provincias" => array("Madrid" => 248000)),
array("comunidad" => "Murcia", "provincias" => array("Murcia" => 2100)),
array("comunidad" => "Navarra", "provincias" => array("Pamplona" => 19587)),
array("comunidad" => "Comunidad Valenciana", "provincias" => array("Valencia" => 19587, "Alicante" => 5342, "Castellon" => 466)),
array("comunidad" => "País Vasco", "provincias" => array("Bilbao" => 124, "San Sebastián" => 8124, "Vitoria" => 259)),
array("comunidad" => "La Rioja", "provincias" => array("Logroño" => 1081))
);
$continentes = array(
array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
);

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
echo "<h3>ARRAY 1</h3>";
echo "<p> El minimo es " . ($minimo = min($numeros) ) . " el maximo " .  ($maximo = max($numeros) )   ." y la media es "  . ($media = array_sum($numeros)/ count($numeros)). "";
echo "<h2>=MUJERES Y HOMBRES=</h2>";
$conteo = array_count_values($generos);
echo "<h3>Conteo de valores:</h3>";
echo "<p>M: " . ($conteo['M'] ?? 0) . "</p><br>";
echo "<p>F: " . ($conteo['F'] ?? 0) . "</p><br>";
echo "<h3>Listado de personas</h3>";
echo "<table>";
echo "<tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ciudad</th>
        <th>Email</th>
        <th>Altura</th>
        <th>Campos</th>
      </tr>";

foreach ($personas as $persona){
    echo "<tr>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['apellido']}</td>";
    echo "<td>{$persona['ciudad']}</td>";
    echo "<td>{$persona['email']}</td>";
    echo "<td>{$persona['altura']}</td>";
    $campos = count($persona);
    echo "<td>$campos</td>";
    echo "</tr>";
}
echo "</table>";

foreach ($comunidades as $comunidad) {
    $nombre_comunidad = $comunidad['comunidad'];
    echo "<h2>$nombre_comunidad</h2>";

    $total_rayos = 0; 

    foreach ($comunidad['provincias'] as $provincia => $rayos) {
        $total_rayos += $rayos;
       

        
        if ($rayos > 500) {
            $color = "red";
        } else {
            $color = "green";
        }

        echo "<p>$provincia ----> <b style='color:$color;'>$rayos</b></p>";
    }

    echo "<p><b>Casos totales en $nombre_comunidad ----> $total_rayos</b></p>";
}
echo "<table>";
echo "<tr>
      <th>Pais</th>
      <th>Capital</th>
      <th>Bandera</th>
      </tr>";

foreach ($continentes as $continente) {
    foreach ($continente['paises'] as $paises){
        $nombre_pais = $paises['pais'];
        $capital_pais = $paises['capital'];
        $bandera_pais = $paises['bandera'];
        echo "<tr>";
        echo "<td>$nombre_pais</td>";
        echo "<td>$capital_pais</td>";
        echo "<td><img src='$bandera_pais' alt=''></td>";
        echo "</tr>";
    }
}


?>

</body>
</html>
