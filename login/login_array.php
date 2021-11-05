<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
    <style>
        /* 全部的標籤 */
        /* *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        } */
        body{
            align-content: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: antiquewhite;
        }
        #botton {
            width: 100px;
            height: 50px;
            font-size: 20px;
            /* box-shadow: 1px 1px 1px 1px ; */
        }
        
        </style>
</head>

<body>
    <h2>傳給自己</h2>
    <form action="login_array.php" method='post'>
    <?php

    $users=[
        ['acc'=>'mack','pw'=>'1234'],
        ['acc'=>'judy','pw'=>'5678'],
        ['acc'=>'james','pw'=>'4444'],
        ['acc'=>'mary','pw'=>'8888'],
    ];
// 放變數去測試程式的結果$test=false;
// 測出來之後再去放要顯示的結果 
if(!empty($_POST)){
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $test=false;
    foreach($users as $user){

        if($acc==$user['acc'] && $pw==$user['pw']){
            $test=true;
    
        }
    }
        if($test){    
            echo "帳密及密碼正確";
            echo "<br>";
            echo "登入成功";
        }else{
            echo "帳密錯誤";
            echo "<br>";
            echo "登入失敗";
    }

    }

    ?>

    <h1>Sign In to your bank account</h1>
    <h3>If you have any question please feel free to contect us.</h3>
    <!-- action連php檔案 -->
    <!-- 預設通常用post  尤其是帳密重要-->
    
        <p>username:<input type="text" name='acc' id='acc' value=""></p>
        <!-- 密碼隱藏功能type="password" -->
        <p>password:<input type="password" name='pw' id='pw' value=""></p>
        <p><input id="botton" type="submit" value="Sign In" style="color:green; background-color: beige">
        <input id="botton" type="reset" value="Cancel" style="color:green; background-color: beige">
    
    </form>
</body>
</html>