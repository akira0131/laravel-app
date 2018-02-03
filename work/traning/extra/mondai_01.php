<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Mondai 1</title>
    </head>

    <body>
    <!-- フォーム画面 -->
    <form action="" method="post">
        <span>数値を入力してください</span><br />
        <input type="hidden" name="form_data" value="true" />
        <input type="text" name="num" value="" />
        <input type="submit" value="出力" />
    </form>
    <?php
        class Calcurator {
            public function isPrimeNumber($num) {
                if ( $num >= 1) {
                    for ($i = 2; $i < $num; $i++) {
                        if ( $num % $i == 0) {
                            return false;
                        } 
                    }
                }
                return true;
            }
        }

        if ( !isset($_POST['form_data'])) {
            exit;
        } elseif ( empty($_POST['num']) || !is_numeric($_POST['num'])) {
            echo $_POST['num'] . "は数値ではありません。";
            exit;
        }

        $num = $_POST['num'];
        $calcurator = new Calcurator;
        if ( $calcurator->isPrimeNumber($num) == true) {
            echo $num . " は素数です。";
        } else {
            echo $num . " は素数ではありません。";
        }
    ?>
    </body>
</html>

