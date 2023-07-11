<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="text" name="nome" id="nome" pattern="[a-zA-Z]+">
        <input type="submit" value="CONFIRMAR">
    </form>
    <p>
        <?php 
            if(!empty($_GET['nome'])){
                echo "Seja Bem-Vindo ".$_GET['nome'];
            }
        
        ?>
    </p>

</body>
</html>