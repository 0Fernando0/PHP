<!--
    &&
    |
    !
-->
<p>
    <?php 
        $dia = $_GET['dia'];
        if($dia == 8 || $dia == 10){
            echo "Hoje é um bom dia $dia";
        }else{
            echo "Hoje é um dia normal";
        }
    ?>
</p>
<p>
    <?php 
        // entre 1 a 9
        if($dia > 0 && $dia < 10){
            echo "o dia está entre 1 e 9";
        }
    ?>
</p>
