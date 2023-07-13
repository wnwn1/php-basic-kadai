<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題11提出</title>
</head>

<body>

    <p>
        <?php
        $sale_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        foreach ($sale_data as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>

</body>
</html>