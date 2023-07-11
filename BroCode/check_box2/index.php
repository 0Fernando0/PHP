<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

    <input type="checkbox" name="lang[]" id="python" value="python">
    <label for="python">PYTHON</label>
    <br>
    <input type="checkbox" name="lang[]" id="kotlin" value="kotlin">
    <label for="kotlin">KOTLIN</label>
    <br>
    <input type="checkbox" name="lang[]" id="php" value="php">
    <label for="php">PHP</label>
    <br>
    <input type="submit" value="CADASTRAR" name="send">
    </form>

    <?php 

        if(isset($_POST['send'])){
            if(isset($_POST['lang'])){

                foreach($_POST['lang'] as $lang){
                    echo "você programa em $lang<br>";
                }
            
            }
            else{
                echo "você programa não é programador<br>";
            }
        }

    ?>

</body>
</html>
