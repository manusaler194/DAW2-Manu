<?php 
session_start();

if (isset($_POST['reset'])){
    $_SESSION = [];
    
}
if (!isset($_SESSION['correr']) || isset($_POST['reset'])){
    $_SESSION['correr'] = [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
}
if (!isset($_SESSION["posicion"])){$_SESSION["posicion"] =0;}
if (isset($_POST['tirar'])) {
    $_SESSION['random'] = rand(1,4);
    
    foreach ($_SESSION['correr'] as $key => $value) {
        if ($_SESSION['correr'][$key]==1) {
            $_SESSION['correr'][$key] = 0;
            $_SESSION["posicion"] = $key;
        }
    }
    $_SESSION["posicion"] += $_SESSION['random'];
    $_SESSION['correr'][$_SESSION["posicion"]] = 1;
} else {
    $_SESSION['random'] ="";
}
   
    
    
    

echo $_SESSION['correr'][1];    
   

echo $_SESSION['random'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    tr,td {
        width: 50px;
        height: 50px;
        border: solid;
    }

</style>
<body>
    
<?php 

echo "<table>";
echo "<tr>";

for ($i=0;$i<20;$i++) {
    

    if ($_SESSION["posicion"] >=20){
        $_SESSION["correr"][19] = 1;
    } else if ($_SESSION['correr'][$i] ==1){
        echo "<td>&#9816</td>";
        
        
    }else {
        echo "<td></td>";
    }
    
}
   


echo "</tr>";
echo "</table>";

 if ($_SESSION["posicion"] >=20){
    echo "JUEGO TERMINADO HAS GANADO!!! DALE A RESET PARA COMENZAR DE NUEVO";
 }
?>
<form action="" method="post">

    <input type="submit" name="tirar" value="tirar">
    <input type="submit" name="reset" value="reset">


</form>

</body>
</html>