<!DOCTYPE html><html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>
    <?php
        echo '<p>東京の時間を表示</p>';
        date_default_timezone_set('Asia/Tokyo');
        echo date('<p>Y/m/d H:i:s</p>');
        $name = 'Programmer-Life';
        echo '<p><small>'.$name . 'のサンプルテストページ</small></p>' ;

        // PHPに関する情報非表示
        phpinfo();
    ?>

</body>
</html>