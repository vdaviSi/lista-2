<html>
    <head>
        <title>Q15</title>
    </head>
    <body>
        <?php

            echo "<table border = 1>";

            for($lin = 1; $lin <= $_GET["lin"]; $lin++){
                echo "<tr>";
                for($col = 1; $col <= $_GET["col"]; $col++){
                    echo "<td>linha " . $lin . " - coluna " . $col . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";

        ?>
    </body>
</html>