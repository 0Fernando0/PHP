<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <!--
    <link rel="stylesheet" href="/style/style.css">
-->
</head>
<body>

    <section>

        <h1>CONVERSOR DE MOEDA V2</h1>
        
        <?php 
            
            $numero = $_GET['numero'] ?? 0.0;
            
            // API //
            const BASE_URL = "http://economia.awesomeapi.com.br/json/last/USD-BRL";
            
            $api = json_decode(file_get_contents(BASE_URL));
            foreach($api -> moeda as $money){
                print_r("valor: $money->bid <br>");
            }
            
            ?>

    </section>

</body>
</html>
