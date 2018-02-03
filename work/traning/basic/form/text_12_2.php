<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>フォーム画面</title>
    </head>

    <body>
    <?php
        if ( !isset($_POST['form_data'])) {
            exit;
        }
        $cnt = $_POST['cnt'];
        if ( empty($cnt)) {
            echo "入力内容が確認できません。整数を入力してください。<br />";
            echo '<input type="button" value="入力フォーム画面に戻る" onClick="location.href=\'text_12_1.html\'"><br />';
            exit;
        } elseif ( !is_numeric($cnt)) {
            echo "整数以外が入力されています。整数を入力してください。<br />";
            echo '<input type="button" value="入力フォーム画面に戻る" onClick="location.href=\'text_12_1.html\'"><br />';
            exit;
        }
    ?>
    <form action="../mondai_12.php" method="post">
    <?php
        echo '<input type="hidden" name="form_data" value="true" />';
        echo '<span>整数を入力してください。</span><br />';
        for ( $i = 0; $i < $cnt; $i++) {
            echo '<span>'.($i + 1).'個目の入力フォーム：</span><input type="text" name="numbers[]" value="" /><br />';
        }
        echo '<input type="submit" value="計算" />';
    ?>
    </form>
    </body>
</html>
