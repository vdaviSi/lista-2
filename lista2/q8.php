<html>
    <head>
        <title>Q8</title>
    </head>
    <body>
        <?php

            $max = $_GET["max"];

            $contador = 0;
            $soma = 0;

            while($contador <= $max){
            $soma += $contador;
            $contador ++;
            }

            echo "Soma = ".$soma;

        ?>
    </body>
</html>