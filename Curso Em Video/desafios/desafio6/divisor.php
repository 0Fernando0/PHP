<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP (8)</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <section>
            <h1>ANATOMIA DE UMA DIVISÃO</h1>
            <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo" value="0">

                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor" value="0">
                <input type="submit" value="Analisar">
            </form>
        </section>

        <section>
            <h1>Estrutura de uma Divisão</h1>
            <?php 

                $dividendo = $_GET['dividendo'] ?? 0;
                $divisor = $_GET['divisor'] ?? 0;

                $divisao = $dividendo / $divisor;
                $resto = $dividendo % $divisor;

                echo "$dividendo | $divisor<br>";
                echo "$resto |  ". floor($divisao);
            ?>
        </section>
    </main>
</body>
</html>