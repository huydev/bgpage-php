<?php
require_once('./utils.php');
header("Access-Control-Allow-Credentials:true");
header('Content-Type: application/json');

$callback = $_GET['callback'];
session_start();
if(isset($_SESSION['islogin'])){
  $result = [
    'status'=>1,
    'msg'=>'已登录'
  ];
}else{
  $result = [
    'status'=>0,
    'msg'=>'未登录'
  ];
}
createJson($callback, $result);
?>