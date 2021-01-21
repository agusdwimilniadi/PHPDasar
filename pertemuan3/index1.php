<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
<table border='1'>
    <?php
        for ($i=1; $i < 5; $i++) { 
            echo "<tr>";
            for ($j=1; $j < 5; $j++) { 
                echo "<td>$i, $j </td>";
            }
            echo "</tr>";
        }
    ?>
</table>
<?php 

$vars="saw"
?>
<h1><?php $vars  ?></h1>

</body>
</html>