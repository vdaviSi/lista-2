<html>
    <head>
        <title>Q16</title>
    </head>
    <body>
        <?php

            $num = $_GET["num"];
            
            for($cont = 0; $cont <= 10; $cont++ ){
                $mul = $num * $cont;
                echo "$num x $cont = $mul";
                echo "<br/>";
            }
            
        ?>
    </body>
</html>