<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual Linguagem?</title>
</head>
<body>
    <main>

        <h1>Qual A Sua Linguagem Favorita?</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="radio" name="lang" id="python" value="python" checked>
            <label for="python">Python</label>
            <br>
            <input type="radio" name="lang" id="kotlin" value="kotlin">
            <label for="kotlin">Kotlin</label>
            <br>
            <input type="radio" name="lang" id="php" value="php">
            <label for="php">Php</label>
            <br>
            <input type="submit" value="ENVIAR" name="confirm">
        </form>

        <?php 
            if(isset($_POST['confirm'])){
                echo "<p>sua linguagem favorita é ".$_POST['lang']."</p>";
            }
        ?>
    </main>
</body>
</html>