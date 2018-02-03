<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP 解答用紙</title>
    </head>
    <body>
    <?php
        // リンク
        echo "■基礎問題<br />";
        $numbers = range(0, 15);
        foreach ( $numbers as $number) {
            $label = "問". sprintf('%02d', $number);
            $file = "basic/mondai_".sprintf('%02d', $number).".php";
            if ( file_exists($file)) {
                echo '<input type="button" value='.$label.' onClick="location.href=\''.$file.'\'"><br />';
            }
        }
    ?>
    </body>
</html>
