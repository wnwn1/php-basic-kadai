<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $str = 'アイウエオカキクケコサシス';
        $array =  [];
        for ($i = 0; $i < 10; $i++){
            $text_string = mb_substr($str, $i, 1);
            $array[] = $text_string;
        }
        echo implode('', array_reverse($array));
        ?>
    </p>    
</body>
</html>