<?php
$GetUsername = $_GET['user'];
$MyUser = '123';
$GetUsermima = $_GET['password'];
$Mypassword = '123';
if($GetUsername==$MyUser&&$GetUsermima==$Mypassword){
    echo '登陆成功';
}else{
    echo '登陆失败';
}
?>