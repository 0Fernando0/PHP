<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responda-Me</title>
    <link rel="stylesheet" href="/get_post/style.css">
</head>
<body>
    <!-- métodos GET e POST -->
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?=$_GET['nome']?>">
        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade" value="<?=$_GET['idade']?>">
        <input type="submit" value="Enviar">
    </form>
    <p>olá <?=$_GET['nome']?></p>
    <p>você tem <?=$_GET['idade']?> anos certo?</p>
</body>
</html>
