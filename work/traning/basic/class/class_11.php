<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>class</title>
    </head>

    <body>
    <!-- クラス定義 -->
    <?php
        // 並び替え、最大値、最小値を計算するクラス
        class Calcurator {
            public function getMaxNumber($numbers) {
                return max($numbers);
            }
            public function getMinNumber($numbers) {
                return min($numbers);
            }
            public function getSortNumbers($numbers) {
                sort($numbers);
                foreach ( $numbers as $num) {
                    $syojun = $syojun. $num . "、";
                }
                return rtrim($syojun, '、');
            }
        }
    ?>
    </body>
</html>
