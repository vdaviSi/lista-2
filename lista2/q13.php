<html>
    <head>
        <title>Q13</title>
    </head>
    <body>
        <?php

            $soma = 0;

            for($cont = 0; $cont < 10000; $cont += 7 ){
                $soma += $cont;
            }

            echo "Soma = " . $soma;
            
        ?>
    </body>
</html>