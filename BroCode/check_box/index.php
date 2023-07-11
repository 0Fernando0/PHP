<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

    <input type="checkbox" name="python" id="python" value="python">
    <label for="python">PYTHON</label>
    <br>
    <input type="checkbox" name="kotlin" id="kotlin" value="kotlin">
    <label for="kotlin">KOTLIN</label>
    <br>
    <input type="checkbox" name="php" id="php" value="php">
    <label for="php">PHP</label>
    <br>
    <input type="submit" value="CADASTRAR" name="send">
    </form>

    <?php 
        function validacao($lang){
            if(isset($_POST[$lang])){
                echo "você Programa em $lang<br>";
                return;
            }
            echo "você Não Programa em $lang<br>";
        }

        if(isset($_POST['send'])){
            
            validacao('python');
            validacao('kotlin');
            validacao('php');
            
        }
    ?>

</body>
</html>
