<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

    <section>
        <h1>trabalhando com números aleatórios</h1>
        <p>gerando um número aleatorio entre 0 a 100...</p>
        <?php 
            $valor = rand(0,100);
            echo "<p>o valor gerado foi: $valor</p>";
        ?>
        <button onclick="location.reload()">GERAR OUTRO</button>
    </section>
</body>
</html>

