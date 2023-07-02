<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

    <section>

        <?php 
            
            // abs - converte valores para  numeros positivos
            abs(-200);
            
            // base_convert - conversor de base númerica
            base_convert("23",10,2);
            
            // ceil,floor,round - funções para arredondar
            ceil(1.45);
            floor(1.45);
            round(1.45);
            
            // hypot - calcula a hipotenusa
            hypot(31,13);
            
            // intdiv - retorna a parte inteira de uma divisão
            intdiv(5,2); 
            
            // min,max - retorna o maior/menor valor 
            max(6,5,4,3,2,1);
            min(5,3,4);
            
            // pi - retorna o valor de PI 
            pi();
            
            // pow - potencia
            pow(3,2);
            
            // sin,cos,tan - retorna o seno,coseno,tangente
            sin(13);
            cos(13);
            tan(13);

            // sqrt - raiz quadrada
            $raiz = 81 ** .5;
            sqrt(21);
            

        ?>

    </section>

</body>
</html>

