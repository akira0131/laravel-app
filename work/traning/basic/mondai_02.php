<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 2</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <input type="text" name="number" value="" />
        <input type="submit" value="出力" />
    </form>
    <?php
        $number = $_POST['number'];
        if ( empty($number) || $number == 0) {
            exit;
        } elseif ( !is_numeric($number)) {
            echo '<font color="red" size=5>「'.$number."」は数値ではありません。</font>";
        } else {
            echo "入力した値は「".$number."」です。<br />";
        }
    ?>
    </body>
</html>
