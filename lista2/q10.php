<html>
    <head>
        <title>Q10</title>
    </head>
    <body>
        <?php

            $tent = 0;
            $soma = 0;

            while(true){
                $nsort = rand(0,100);
                $tent ++;
                $soma += $nsort;

                if($soma > 1000){
                    echo "Mais de 1000 com " . $tent . " sorteios";
                    break;
                }
            }

        ?>
    </body>
</html>