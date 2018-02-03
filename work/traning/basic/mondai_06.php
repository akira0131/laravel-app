<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 6</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <textarea name="number" rows="2" cols="20"></textarea>
        <input type="submit" value="出力" />
    </form>
    <?php
        $number = $_POST['number'];
        echo nl2br($number);
    ?>
    </body>
</html>
