<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <section>

    <?php 
        $nome = $_GET['nome'] ?? "nome";
        $sobrenome = $_GET['sobrenome'] ?? "desconhecido";
        echo "<h1>é uma prazer te conhecer $nome $sobrenome, esse é o meu site</h1>";
    ?>
    <a href="index.html">voltar para a pagina anterior</a>

    </section>
</body>
</html>

