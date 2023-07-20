<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        for ($i = 1; $i <= 100; $i++){
            if ($i %3 === 0 && $i %5 === 0){
                echo "FizzBuzz";
            } elseif ($i%3 === 0){
                echo "Fizz";
            } elseif ($i %5 === 0){
                echo "Buzz";
            } else {
                echo $i;
            }
            echo "<br>";
        };
        ?>
    </p>    
</body>
</html>