<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="num1" id="numero1" placeholder="primeiro número" value="<?=$_GET['num1']?>" pattern="\d+">
        <input type="number" name="num2" id="numero2" placeholder="segundo número" value="<?=$_GET['num2']?>" pattern="\d+">
        <input type="submit" value="CONFIRMAR">
    </form>
    <p>
        <?php 
            $soma = $_GET['num1'] + $_GET['num2'];
            echo "a soma deu $soma";
        ?>
    </p>

</body>
</html>