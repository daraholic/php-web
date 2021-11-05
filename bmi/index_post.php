<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算BMI(post)</h1>
    <?php
        if(!empty($_GET['bmi'])){
            echo "你上次計算的值:".$_GET['bmi'];
        }
    ?>

    <!-- 可以使用快捷鍵form:get +tab -->
    <form action="bmi.php" method="post">
        <p>身高:<input type="text" name='height' id='height'></p>
        <p>體重:<input type="text" name='weight' id='weight'></p>
        <p><input type="submit" value="計算"></p>
    </form>
</body>
</html>