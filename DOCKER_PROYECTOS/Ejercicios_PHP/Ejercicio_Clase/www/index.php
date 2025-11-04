<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./enviar.php" method="get">
        <input type="text" name="nombre" id="">
      <input type="password" name="email" id="">
        <input type="submit" name="boton" id="">
    </form>

    <form action="./enviar.php" method="POST">

<select name="lenguajes[]" multiple="true">
    <option value="c">C</option>
    <option value="java">Java</option>
    <option value="php">PHP</option>
    <option value="python">Python</option>
</select>

<br>
    <input type="checkbox" name="curso[]" value="daw" /> daw <br/>
    <input type="checkbox" name="curso[]" value="asir" /> asir<br/>
    <input type="checkbox" name="curso[]" value="smr" /> smr<br/>
    <input type="checkbox" name="curso[]" value="universidad" /> universidad <br/>

<input type="submit" name="enviar">
<br/>
<br/>
<br/>
<br/>
<br/>

<form action="./enviar.php" method="POST">
    <input placeholder="nombre" type="text" name="nombre" id="">
    <input type="text" placeholder="apellido" name="apellido" id="">
    <input type="password" placeholder="contraseña" name="contraseña" id=""><br/>
    <input type="checkbox" name="actividades[]" id="" value="futbol"> futbol <br/>
    <input type="checkbox" name="actividades[]" id="" value="basket"> basket <br/>
    <input type="checkbox" name="actividades[]" id="" value="badminton"> badminton <br/>
    <input type="checkbox" name="actividades[]" id="" value="balonmano"> balonmano <br/>
    <input type="radio" name="radio" id="" value="Masculino"> Masculino<br/>
    <input type="radio" name="radio" id="" value="Femenino"> Femenino<br/>
    <input type="number" placeholder="edad" name="edad" id="" min="18" max="99"><br/>
    <input type="textarea" placeholder="comentarios" name="comentarios" id=""><br/>
    <input type="color" name="color" id=""><br/>
    <input type="hidden" name="oculto" value="prueba"><br/>
    <input type="submit" value="" placeholder="enviar"><br/>
</form>

    <form action="./enviar.php" method="POST">
        <input type="number" placeholder="num1" name="num1" id=""><br/>
        <input type="number" placeholder="num2" name="num2" id=""><br/>
        <button name="enviar">Sumar</button>
    </form>
    <form action="./enviar.php" method="POST">
    <?php
    
    for ($i=0; $i <10 ; $i++) { 
     echo   " numero $i<input type='number'  name='inp[]' value='' id=''><br/>";
    }
    
    ?>
    <button name="enviar">Sumar</button>
    </form>
    




    <form enctype="multipart/form-data" action="./subir.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>
</form>
</form>
</body>
</html>