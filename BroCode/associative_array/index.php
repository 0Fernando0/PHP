<?php 

    // associative array

    $capitais = array("Brasil" => "Brasilia",
    "Eua" => "Washigton",
    "Japão" => "Tokyo"); // dicionario em php

    // adicionando novo elemento ao associative array
    $capitais["Russia"] = "Moscou";

    // removendo ultimo elemento do array
    array_pop($capitais);

    // removendo o primeiro elemento do array
    array_shift($capitais);

    // pegando somente as chaves
    $chaves = array_keys($capitais);

    // pegan do somente os valores 
    $valores = array_values($capitais);

    // retornando um novo array
    $emparalhado = array_flip($capitais);

    // inverter o array
    $lista_reversa = array_reverse($capitais);


    foreach($lista_reversa as $key => $value){
        echo "Chave: $key|Valor: $value<br>";
    }


?>