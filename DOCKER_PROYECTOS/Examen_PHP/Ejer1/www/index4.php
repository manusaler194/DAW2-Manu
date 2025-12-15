
<?php 

print_r(intval(7/2));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    div{
      border-radius: 50px;
        
    }
    .vertical {
        display: flex;
        justify-items: center;
       width: 30px;
        height: 30px;
        
        
    }
    .separo {
        margin: 3;
        width: 30px;
        height: 30px;
    }
    .centrado {
        border: solid;
       display: inline-block;
        justify-items: center;
        width: 300px;
        height: 500px;
    }
    .linea {
        display: flex;
        justify-content: center;
        
    }

</style>
<body>
    <h2>LA CRUZ</h2>
    <form action="" method="post">
    <input type="text" name="inpu" >
    <input type="color" name="color" id=""> 
    <input type="submit" value="" name="envia">   
    </form>
    <div class="centrado">
    <?php if (isset($_POST["envia"])){
    $tam = intval($_POST["inpu"]);
    $color = $_POST["color"];
    $mitad = intval($tam /2);
    print_r($color);
   // if ($tam%2!=0){

        for ($i=0; $i <$tam; $i++) { 
           if($i!=$mitad){

               echo "<div class='vertical' style='background-color:$color'>1</div>";
            }
            if ($i==$mitad){
                echo "<div class='linea' >";
                for ($j=0; $j < $tam ; $j++) { 
                    echo "<div class='separo' style='background-color:$color'>1</div>";
                }
                echo "</div>";
            }
        }
   // } else 
    
} ?>
    </div>
</body>
</html>