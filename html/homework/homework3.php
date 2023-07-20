<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $email = 'matsukuramegumi95@gmail.com';
        if(preg_match_all('/\A[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\z/', $email)){
            echo '有効なメールアドレスです';
        } else {
            echo '無効なメールアドレスです';
        }
        ?>
    </p>    
</body>
</html>