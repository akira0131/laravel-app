<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 11</title>
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
    <!-- 入力フォーム -->
    <form action="" method="post">
        <input type="hidden" name="hidden_text" value="test" />
        <span>整数を入力してください。</span><br />
        <span>1個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />
        <span>2個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />
        <span>3個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />
        <span>4個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />
        <span>5個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />
        <input type="submit" value="計算" />
    </form>
    <!-- フォームに入力された内容を処理 -->
    <?php
        // 入力があるまで入力内容をチェックしない
        $hidden_text = $_POST['hidden_text'];
        if ( empty($hidden_text)) {
            exit;
        }
        // 入力内容チェック
        $numbers = $_POST['numbers'];
        foreach ( $numbers as $key => $num) {
            if ( empty($num)) {
                echo "入力内容が確認できません。整数を入力してください。（" . ($key + 1) . "個目の入力フォーム）";
                exit;
            } elseif ( !is_numeric($num)) {
                echo "整数以外が入力されています。整数を入力してください。（" . ($key + 1) . "個目の入力フォーム）";
                exit;
            }
        }
        // オブジェクト生成
        $calcurator = new Calcurator;
        // メソッド実行
        $result[0] = $calcurator::getMaxNumber($numbers);
        $result[1] = $calcurator::getMinNumber($numbers);
        $result[2] = $calcurator::getSortNumbers($numbers);
        // 結果を返却
        echo "最大値は" . $result[0] . "です。<br />";
        echo "最小値は" . $result[1] . "です。<br />";
        echo "昇順は" . $result[2] . "です。<br />";
    ?>
    </body>
</html>
