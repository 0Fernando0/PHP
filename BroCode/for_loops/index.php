<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contator</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <section>
        <form action="<?=$_GET['PHP_SELF']?>" method="get">
            <input type="number" name="valor" id="valor">
            <input type="submit" value="CALCULAR">
        </form>
    </section>
    <section>
        <?php 
            $fim = $_GET["valor"];

            for($inicio = 0; $inicio <= $fim; $inicio++){
                echo "<p>Hello, $inicio</p>";
            }
        
        ?>
    </section>
</body>
</html>