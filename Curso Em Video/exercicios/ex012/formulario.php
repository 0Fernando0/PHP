<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Retro-Alimentado</title>
    <style>
        body{
            background-image: linear-gradient(to bottom,red,purple);
            background-attachment: fixed;

            display: flex;
            justify-content: center;
        }
        main{
            display: flex;
            flex-direction: column;
            

            background-color: white;
            width: max-content;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid black;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
    </style>
</head>
<body>

    <main>
        <h1>Conversor De Moeda V1.0</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">NÚMERO</label>
            <input type="number" name="num1" id="num1" value="0 ">

            <label for="num2">NÚMERO</label>
            <input type="number" name="num2" id="num2" value="0">

            <input type="submit" value="SOMAR">
        </form>
        <?php 
            $num1 = $_GET['num1'] ?? 0;
            $num2 = $_GET['num2'] ?? 0;
            $soma = $num1 + $num2;
        ?>
        <section>
            <h1>SOMA DOS VALORES</h1>
            <?php 
                echo "a soma é $soma";
            ?>
        </section>
    </main>

</body>
</html>