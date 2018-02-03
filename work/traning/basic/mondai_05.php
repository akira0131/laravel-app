<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 5</title>
    </head>

    <body>
    <!-- 表を表示 -->
    <table border="1" cellpadding="1">
    <?php
        // 左辺の数字
        for ( $i = 1; $i <=9; $i++) {
            echo "<tr>";
            // 右辺の数字
            for ( $j = 1; $j <= 9; $j++) {    
                // 左辺と右辺の数字を掛け算した結果を表示
                echo "<td>".($i * $j)."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    </body>
</html>
