<?php
if(isset($_COOKIE['user'])){
    header('location:mem_center.php');
    // header之前不能有輸出(echo)
}
// $_COOKIE['user']的變數被存在瀏覽器
// 在這邊設定header(領航)的話 就會去mem_center
// 然後我們設定是3600秒 都會是登入狀態

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>使用COOKIE登入 並紀錄登入狀態</h1>
    <!-- 使用三個檔案來設定這件事 -->
    <?php
    // 有明確的變數用 isset
    if(isset($_GET['status']) && $_GET['status']=='err'){
        echo "<sapn style='color:red'>帳號密碼錯誤";
    }
    ?>
    <!-- action要設定去檢查帳密那邊 -->
    <!-- 都設定好之後打開這個index檔案 
    輸入帳密 就會發現有cookie 
    mem_center那邊也有紀錄cookie
    **路徑要一樣才有cookie
    -->
    <form action="./check_login.php" method="post">
        <p>帳號:<input type="text" name='acc' id='acc' value=""></p>
        <p>密碼:<input type="password" name='pw' id='pw' value=""></p>
        <p><input id="botton" type="submit" value="Sign In" style="color:green; background-color: beige">
        <input id="botton" type="reset" value="Cancel" style="color:green; background-color: beige">
    
    </form>
</body>
</html>