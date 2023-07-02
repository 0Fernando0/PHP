<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

    <section>
        <h1>CONVERSOR DE MOEDA</h1>
        <?php 

            // ?? == ?:
            $valor_atual = $_GET['numero'] ?? 0.0;
            
            $formato = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo $formato;
            
            echo "<p>o valor $valor_atual</p>";
            
        ?>
    </section>

</body>
</html>

