<?php
require_once('./utils.php');
header("Access-Control-Allow-Credentials:true");
header('Content-Type: application/json');
$callback = $_GET['callback'];
session_start();
if(isset($_SESSION['islogin'])){
  session_unset();
  $result = [
    'status'=>1,
    'msg'=>'退出登录成功'
  ];
}else{
  $result = [
    'status'=>0,
    'msg'=>'未登录'
  ];
}
createJson($callback, $result);
?>