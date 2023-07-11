<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela</title>
</head>
<body>
    <form action="" method="post">
        <label for="x">X: </label>
        <input type="number" name="x" id="x">
        <br>
        <label for="y">Y: </label>
        <input type="number" name="y" id="y">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php 
        $x = $_GET["x"];
        $y = $_GET["y"];
        $soma = $x + $y;
        $valor_maximo = max($x,$y);
        $valor_aleatorio = rand(0,10);
    ?>
    <p>a soma foi <?=$soma?></p>
    <p>o valor máximo foi <?=$valor_maximo?></p>
    <p> valor aleatorio foi <?=$valor_aleatorio?></p>
</body>
</html>