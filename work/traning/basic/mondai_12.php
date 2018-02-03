<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 12</title>
    </head>

    <body>
    <?php
        // クラスファイルロード
        require_once "class/class_11.php";
        
        // フォーム画面遷移
        if ( !isset($_POST['form_data'])) {
            header("Location: http://dm.m4team.net/basic/form/text_12_1.html");
            exit;
        }
        $numbers = $_POST['numbers'];
        foreach ( $numbers as $key => $num) {
            if ( empty($num)) {
                echo "入力内容が確認できません。（".($key + 1)."個目の入力フォーム）<br />";
                echo "最初の個数入力からやり直してください。<br />";
                echo '<input type="button" value="整数の個数入力フォーム画面に戻る" onClick="location.href=\'form/text_12_1.html\'"><br />';
                exit;
            } elseif ( !is_numeric($num)) {
                echo "整数以外が入力されています。（".($key + 1)."個目の入力フォーム）<br />";
                echo "最初の個数入力からやり直してください。<br />";
                echo '<input type="button" value="整数の個数入力フォーム画面に戻る" onClick="location.href=\'form/text_12_1.html\'"><br />';
                exit;
            }
        }
        // 最大値、最小値、昇順を求める
        $calcurator = new Calcurator;
        $result[0] = $calcurator::getMaxNumber($numbers);
        $result[1] = $calcurator::getMinNumber($numbers);
        $result[2] = $calcurator::getSortNumbers($numbers);
        echo "最大値は" . $result[0] . "です。<br />";
        echo "最小値は" . $result[1] . "です。<br />";
        echo "昇順は" . $result[2] . "です。<br />";
    ?>
    </body>
</html>
