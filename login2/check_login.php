<?php
// 使用者帳密:
$acc='ann';
$pw='123';
// 判斷登入資訊是否正確
if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    setcookie('user',$_POST['acc'],time()+3600);
    // 3600 = 1小時
    
    // $_SESSION['user']=$_POST['acc'];
    
    // 登入成功就導去會員中心
    header("location:mem_center.php");
}else{
    header("location:index.php?status=err");
    // 失敗的話就回到登入頁面
    // ? 只是分隔符號 可以自己設定 通常都用?
}

?>