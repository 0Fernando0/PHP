<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: rebeccapurple;
            font-size: 32px;
        }
    </style>
</head>
<body>
    
    <?php

    // MANIPULAÇÃO DE STRING
    
    /* ASPAS SIMPLES */
    $nome = 'gustavo';

    
    /* ASPAS DUPLAS */
    $idade = "23";


    /* STRING HEREDOC */
    echo <<< SIS
        OLÁ $nome
            ESTÁ
                É
                    UMA 
                        STRING
    SIS;
    
    /* STRING NOWDOC */
    echo <<< 'SIS'
        VOCÊ
            TEM
                IDADE: $idade
    SIS;
?>


</body>
</html>