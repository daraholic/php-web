<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <?php
    $bmi=round($_GET['weight']/(($_GET['height']/100)*($_GET['height']/100)),2);
        echo "你的BMI值:".$bmi;
    if($bmi>=18.5 && $bmi<24){
        echo "正常";
    }else{
        echo "異常";
    }
    ?>
    <a href="index.php?bmi=<?=$bmi;?>">回首頁</a>

</body>
</html>