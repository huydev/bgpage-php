<?php
require_once('./utils.php');
header("Access-Control-Allow-Credentials:true");
header('Content-Type: application/json');
$callback = $_GET['callback'];
$name = htmlspecialchars($_GET['name']);
$pwd = htmlspecialchars($_GET['pwd']);

session_start();
if($name == 'admin' && $pwd == 'admin'){
  $_SESSION['islogin'] = 1;
  $info = [
    'status'=>1,
    'msg'=>'登录成功'
  ];
}else{
  $info = [
    'status'=>0,
    'msg'=>'用户名或密码错误'
  ];
}

createJson($callback, $info);
?>