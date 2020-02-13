<html>
    <head>
        <title>Q9</title>
    </head>
    <body>
        <?php

           $tent = 0;
           while(true){
               $nsort = rand(0,50);
               $tent ++;
               echo "Numero" . $nsort . "</br>";
               if($nsort == 15){
                   echo "Numero encontrado em ".$tent." tentativas";
                    break;
               }
           }

        ?>
    </body>
</html>