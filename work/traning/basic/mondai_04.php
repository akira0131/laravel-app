<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 4</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <span>数値を入力してください</span><br />
        <input type="text" name="number" value="" />
        <input type="submit" value="出力" />
    </form>
    <?php
        // 空、若くは「0」が入力された場合
        $number = $_POST['number'];
        if ( empty($number) || $number == 0) {
            exit;
        // 数値以外が入力された場合
        } elseif ( !is_numeric($number)) {
            echo '<font color="red" size=5>「'.$number.'」は数値ではありません。</font>';
        // 入力された数字の回数だけ「Hello World!」を表示
        } else {
            for ( $i = 1; $i <= $number; $i++) {
                echo "Hello World!<br />";
            }
        }
    ?>
    </body>
</html>
