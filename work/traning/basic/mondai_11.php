<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 11</title>
    </head>

    <body>
    <?php
        // クラスファイルロード
        require "class/class_11.php";
        // フォーム画面遷移
        if ( !isset($_POST['form_data'])) {
            header("Location: http://dm.m4team.net/basic/form/text_11.html");
            exit;
        }
        // 入力内容チェック
        $numbers = $_POST['numbers'];
        foreach ( $numbers as $key => $num) {
            if ( empty($num)) {
                echo "入力内容が確認できません。整数を入力してください。<br />";
                echo '<input type="button" value="入力フォーム画面に戻る" onClick="location.href=\'form/text_11.html\'"><br />';
                exit;
            } elseif ( !is_numeric($num)) {
                echo "整数以外が入力されています。整数を入力してください。<br />";
                echo '<input type="button" value="入力フォーム画面に戻る" onClick="location.href=\'form/text_11.html\'"><br />';
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
