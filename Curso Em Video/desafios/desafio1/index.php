<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

    <section>
        <h1>resultado final</h1>
        <?php 
            $numero = $_GET['numero'];
            echo "<p>o número escolhido foi $numero</p>";
            echo "<p>o seu antecessor é " . $numero - "1" . "</p>";
            echo "<p>o seu sucessor é " . $numero + "1" . "</p>";
        ?>
        <a href="index.html">VOLTAR</a>

    </section>

</body>
</html>

