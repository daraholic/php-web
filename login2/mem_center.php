<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 成功進到會員中心 -->
    歡迎
    <?php
    session_start();
        if(isset($_COOKIE['user'])){

            echo $_COOKIE['user'];
        }else{
            echo $_SESSION['user'];
        }
        // 無論user是否同意使用COOKIE都可以記錄
        // 直接用session
    ?>
    登入:
</body>
</html>