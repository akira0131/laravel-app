<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 3</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <span>数値を入力してください</span><br />
        <input type="text" name="number" value="" />
        <input type="submit" value="出力" />
    </form>
    <?php
        $number = $_POST['number'];
        if ( empty($number) || $number == 0) {
            exit;
        } elseif ( !is_numeric($number)) {
            echo '<font color="red" size="5">「'.$number.'」は数値ではありません。</font>';
        } elseif ( $number % 2 == 0) {
            echo "入力した値は「" . $number . "」です。<br />";
            echo "「".$number."」は2で割りきれます。";
        } elseif ( $number % 2 != 0) {
            echo "入力した値は「".$number."」です。<br />";
            echo "「".$number."」は2で割り切れません。";
        }
    ?>
    </body>
</html>
