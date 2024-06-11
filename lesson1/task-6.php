<html lang="en">
<body>
<table  border="1" cellpadding="5">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            if ($i % 2 == 0 && $j % 2 == 0) {
                echo "<td>$i * $j = ($result)</td>";
            } elseif ($i % 2 != 0 && $j % 2 != 0) {
                echo "<td>$i * $j = [$result]</td>";
            } else {
                echo "<td>$i * $j = $result</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>