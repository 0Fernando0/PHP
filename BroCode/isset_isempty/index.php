<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="user">User</label>
        <input type="text" name="user" id="user" required> <br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required> <br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>

<?php
    // isset() = retorna true se a variavel foi declarada é não é nula
    // isempty = retorna true se a variavel não foi declarada, false,null
    
    if(!empty($_POST)){
        echo "o post foi recebido";
    }else{
        echo "o post NÃO foi recebido";

    }

?>