<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>class</title>
    </head>

    <body>
    <!-- クラス定義 -->
    <?php
        // 固定
        class Profile {
            protected $name = '';
            public function setName($name) {
                $this->name = $name;
            }
            public function getResult() {
                return 'あなたの名前は「' . $this->name . '」です。';
            }
        }
        // オーバーライドして表示文を取得
        class MyProfile extends Profile {
            protected $address = '';
            public function setAddress($address) {
                $this->address = $address;
            }
            public function getResult() {
                return 'あなたの名前は「'. $this->name  .'」で、住所は「' . $this->address . '」です。';
            }
        }
    ?>
    </body>
</html>
