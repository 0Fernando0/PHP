<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP (9)</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <main>
        <?php 
            
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            
            function moedaFormat(float $valor){
                global $padrao;
                return numfmt_format_currency($padrao,$valor,"BRL");                    
            }
            
        ?>
       <section>
            <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
                <label for="salario">salario R$</label>
                <input type="number" name="salario" id="salario">
                <p>considerando o salario minimo </p>
                <?= "considerando o salario minimo de ".moedaFormat(1300);?>
                <input type="submit" value="CALCULAR">
            </form>
       </section>

        <section>
            <h1>RESULTADO FINAL</h1>
            <?php 
                echo "<p>quem recebe um salario </p>";
            ?>
        </section>
    </main>
</body>
</html>