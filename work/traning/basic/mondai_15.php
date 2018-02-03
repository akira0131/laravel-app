<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 15</title>
    </head>

    <body>
    <?php
        // フォーム画面遷移
        if ( !isset($_POST['form_data'])) {
            header("Location: http://dm.m4team.net/basic/form/textarea_15.html");
            exit;
        }
        if ( empty($_POST['comment'])) {
            echo "入力内容が確認できません。<br />";
            echo '<input type="button" value="フォーム画面に戻る" onClick="location.href=\'form/textarea_15.html\'"><br />';
            exit;
        }
        $comment = htmlentities($_POST['comment'], ENT_QUOTES, 'UTF-8');
        echo "あなたが入力した文字は、".$comment."です。<br />";
    ?>
    <!-- 別画面に遷移 -->
    <form method="post" name="saihyouji" action="mondai_15_2.php">
        <input type="hidden" name="comment" value="aaaa">
        <a href="javascript:saihyouji.submit()">入力内容を再表示</a>
    </form>
    </body>
</html>
