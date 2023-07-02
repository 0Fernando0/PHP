<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                function escreva(string $texto){echo "<h1>$texto</h1>";}

                setcookie("dia-da-semana", "SEGUNDA", time()+ 3600);
                session_start();
                $_SESSION["teste"] = "Funcionou!";

                escreva("Superglobal GET");
                var_dump($_GET);

                escreva("Superglobal POST");
                var_dump($_POST);

                escreva("Superglobal REQUEST");
                var_dump($_REQUEST);

                escreva("Superglobal COOKIE");
                var_dump($_COOKIE);

                escreva("Superglobal SESSION");
                var_dump($_SESSION);

                escreva("Superglobal ENV");
                var_dump($_ENV);

                escreva("Superglobal SERVER");
                var_dump($_SERVER);

                escreva("Superglobal GLOBALS");
                var_dump($GLOBALS);
            ?>
        </pre>
        <a href="form.html">VOLTAR</a>
    </main>
</body>
</html>