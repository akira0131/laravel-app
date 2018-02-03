<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 13</title>
    </head>

    <body>
    <?php
        // クラスファイルロード
        require "class/class_13.php";
        // フォーム画面遷移
        if ( !isset($_POST['form_data'])) {
            header("Location: http://dm.m4team.net/basic/form/text_13.html");
            exit;
        }
        // 入力内容チェック
        $name = $_POST['name'];
        if ( empty($name)) {
            echo "入力内容が確認できません。名前を入力してください。<br />";
            exit;
        }
        $address = $_POST['address'];
        if ( empty($address)) {
            echo "入力内容が確認できません。住所を入力してください。<br />";
            exit;
        }
        // インスタンス生成
        $profile = new MyProfile;
        // メソッド実行
        $profile->setName($name);
        $profile->setAddress($address);
        echo $profile->getResult();
    ?>
    </body>
</html>
