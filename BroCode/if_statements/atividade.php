<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="masc">MASCULINO</label>
        <input type="radio" name="sex" id="masc" value="masculino" checked>
        <br>
        <label for="fem">FEMININO</label>
        <input type="radio" name="sex" id="fem" value="feminino">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
    <p>
        você é 
        <?php 
            if($_GET['sex'] == "masculino"){
                echo "Homem";
            }else{  
                echo "Mulher";
            }
        ?>

    </p>
    <p>você é <?=$_GET['sex']?></p>

</body>
</html>