<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 10</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <input type="hidden" name="form_data" value="true" />
        <span>入力してください</span><br />
        <input type="text" name="number" value="" />
        <input type="submit" value="出力" />
    </form>
    <?php
        if ( !isset($_POST['form_data'])) {
            exit;
        // 入力内容チェック
        } else {
            $number = $_POST['number'];
            if ( empty($number)) {
                echo "未入力";
            } elseif ( is_numeric($number)) {
                echo "数値が入力されました";
            } elseif ( is_string($number)) {
                echo "文字列が入力されました";
            }
        }
    ?>
    </body>
</html>
