<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Input</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        form{
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            gap: 5px;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="ENVIAR" name="submit">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            
        }
    ?>
</body>
</html>