<?php

$acc=$_POST['acc'];
$pw=$_POST['pw'];
if($acc=='mack' && $pw=='1234'){
    echo "帳密正確";
    echo "<br>";
    echo "登入成功";
}else{
    echo "帳密錯誤";
    echo "<br>";
    echo "登入失敗";

}

?>