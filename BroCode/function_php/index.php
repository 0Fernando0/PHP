<?php 
    // function
    function is_par(int $number){
        return $number % 2 == 0;
    }

    function dividir(float $numerador,float $denominador): float{
        $div = null;
        try{
            $div = $numerador/$denominador;
        }catch(Exception $erro){
            echo $erro;
            $div = 0;
        }
        return $div;
    }
    echo dividir(5.0,0.0);

?>