<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <input type="text" name="palavra" id="numero1" placeholder="digite uma palavra" value="<?=$_GET['palavra']?>">

        <input type="submit" value="CONFIRMAR">
    </form>

    <?= $palavra = $_GET["palavra"] ?>

    <p>o tipo primitivo é <?= var_dump($palavra)?></p>
    <p>so tem espaços? <?= is_bool(preg_match("\s+",$palavra)) ?></p>

</body>
</html>