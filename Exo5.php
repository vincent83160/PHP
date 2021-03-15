<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newCascadeStyleSheet.css" rel="stylesheet" type="text/css"/>        
    </head>
    <body>
        <?php
//
//for ($j = 0; $j != 12; $j++) {
//    for ($i = 0; $i != 12; $i++) {
//        echo $j * $i, "&nbsp";
//    }
//    echo '<br>';
//}
        echo "<table>";
        for ($j = 1; $j != 13; $j++) {
            echo "<tr>";
            for ($i = 1; $i != 13; $i++) {
                if ($i == 1 or $j == 1) {
                    echo "<td class=\"case bleu\">", $j * $i, "</td>";
                } else {
                    echo "<td class=\"case\">", $j * $i, "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
