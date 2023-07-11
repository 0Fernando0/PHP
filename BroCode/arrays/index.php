

<?php 
    // array = conjunto de dados
    $numeros = array(1,2,3,4,5,6,7,8,9);
    $frutas = array("Maça","Pera","Banana","Uva");

    /*
    echo $numeros[0]."<br>";
    echo $numeros[1]."<br>";
    echo $numeros[2]."<br>";
    echo $numeros[3]."<br>";
    */

    // função push que adiciona um novo elemento ao array
    array_push($frutas,"Goiaba");

    // função para remover o ultimo elemento do array
    array_pop($frutas);

    // função para remover o primeiro elemento do array
    array_shift($frutas);

    // função para inverter array
    $frutas_invertidas = array_reverse($frutas);

    foreach($frutas_invertidas as $it){
        echo "estou comendo " . $it . "<br>";
    }

    echo "temos um total de " . count($frutas) . " frutas";

?>

