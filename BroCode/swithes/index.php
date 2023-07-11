<style>
    *{
        color: white;
    }
    body{
        background-image: linear-gradient(45deg,red,purple);
        background-attachment: fixed;
    }
</style>

<?php
 
    $letra = 'G';
    
    switch($letra){
        case "A": echo "Letra A"; break;
        case "B": echo "Letra B"; break;
        case "C": echo "Letra C"; break;
        case "D": echo "Letra D"; break;
        default: echo "Letra Invalida";
    }

?>