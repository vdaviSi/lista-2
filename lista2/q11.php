<html>
    <head>
        <title>Q11</title>
    </head>
    <body>
        <?php

            echo "<table border = 1>";

            for($lin = 1; $lin <= 10; $lin++){
                echo "<tr>";
                for($col = 1; $col <= 5; $col++){
                    echo "<td>linha " . $lin . " - coluna " . $col . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";

        ?>
    </body>
</html>