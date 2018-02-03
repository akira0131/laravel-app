<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 14</title>
    </head>

    <body>
    <?php
        // フォーム画面遷移
        if ( !isset($_POST['form_data'])) {
            header("Location: http://dm.m4team.net/basic/form/textarea_14.html");
            exit;
        }
        if ( empty($_POST['comment'])) {
            echo "入力内容が確認できません。<br />";
            echo '<input type="button" value="フォーム画面に戻る" onClick="location.href=\'form/textarea_14.html\'"><br />';
            exit;
        }
        $comment = htmlentities($_POST['comment'], ENT_QUOTES, 'UTF-8');
        echo "あなたが入力した文字は、".$comment."です。";
    ?>
    </body>
</html>
