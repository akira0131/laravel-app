<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 9</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <input type="hidden" name="form_data" value="true">
        <input type="checkbox" name="menbers[]" value="日本語">日本語<br />
        <input type="checkbox" name="menbers[]" value="英語">英語<br />
        <input type="checkbox" name="menbers[]" value="中国語">中国語<br />
        <input type="submit" value="出力" />
    </form>
    <?php
        if ( !isset($_POST['form_data'])) {
            exit;
        // 入力内容チェック
        } else {
            $numbers = $_POST['numbers'];
            if ( empty($numbers))  {
                echo "未選択";
            } else {
                echo "入力値<br />";
                foreach ( $numbers as $num ) {
                    echo $num . "<br />";
                }
            }
        }
    ?>
    </body>
</html>
