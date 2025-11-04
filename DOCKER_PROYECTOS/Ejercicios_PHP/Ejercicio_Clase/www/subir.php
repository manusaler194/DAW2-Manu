<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida</title>
</head>
<style>
    img {
        height: 100px;
    }
</style>
<body>
    <?php
$dir_subida = './subida/';
if (isset($_POST['eliminar'])) {
    $archivo_a_borrar = $dir_subida . $_POST['eliminar'];
    if (is_file($archivo_a_borrar)) {
        unlink($archivo_a_borrar);
        echo "<p>Imagen eliminada: {$_POST['eliminar']}</p>";
    } else {
        echo "<p>No se pudo eliminar: archivo no encontrado.</p>";
    }
}
if (isset($_FILES['fichero_usuario'])) {
    

$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//basename: muestra el nombre del fichero con la extensión

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";
}
$fich = $_FILES;
$files1 = scandir($dir_subida);

for ($i=2;$i<count($files1);$i++){
    echo "<form method='POST'>";
    echo "<img src='$dir_subida$files1[$i]' alt=''><br>";
    echo " <button type='submit' name='eliminar' value='$files1[$i]'>BORRAR</button>";
    echo "</form>";
}



?>
    
</body>
</html>
