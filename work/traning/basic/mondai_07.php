<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 7</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <input type="hidden" name="form_data" value="true" />
        <select name ="number">
            <option value="日本語">日本語</option>
            <option value="英語">英語</option>
            <option value="中国語">中国語</option>
        </select>
        <input type="submit" value="出力" />
    </form>
    <?php
        if ( !isset($_POST['form_data'])) {
            exit;
        } else {
            $number = $_POST['number'];
            echo "入力値<br />" . $number;
        }
    ?>
    </body>
</html>
