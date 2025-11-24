<?php 
session_start();
session_destroy();
if (isset($_POST['reset'])){
    $_SESSION = [];
}
if (!isset($_SESSION['correr'])){
    $_SESSION['correr'] = [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
}
    if (!isset($_POST['correr'])) {
        
        $_POST['random'] = rand(1,4);
        
        for ($i=0; $i <20 ; $i++) { 
           if ($_SESSION['correr'][$i]==1) {
            $_SESSION['correr'][$i] =0;
            if ($i+$_POST['random']<=19) {
            $_SESSION['correr'][$i+$_POST['random']] =1;
            break;
            } else {
                 $_SESSION['correr'][0] =1;
                 break;
            }
           }
           break;
        }
    } 
    
   
    
    
    

    
   

print_r($_POST['random']);

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
if ($_SESSION['correr']>19){

}
echo "<table>";
echo "<tr>";

for ($i=0;$i<20;$i++) {
    
    if ($_SESSION['correr'][$i] ==1){
        echo "<td>&#9816</td>";
        
        
    }else {
        echo "<td></td>";
    }
    
}
   


echo "</tr>";
echo "</table";


?>
<form action="" method="post">

    <input type="submit" name="tirar" value="correr">
    <input type="submit" name="reset" value="reset">


</form>

</body>
</html>